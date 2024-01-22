@extends('layouts.admin')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-lg-9 col-12 mx-auto">
                <form id="blogform" class="" action="{{ route('admin.category.update', $categories->id) }}" method="POST"
                    enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="card card-body mt-4">
                        <h6 class="mb-0">Edit Category</h6>
                        {{-- <p class="text-sm mb-0">add caegory to your blog</p> --}}
                        <hr class="horizontal dark my-3">
                        <label for="projectName" class="form-label">Title</label>
                        {{-- <input type="text" class="form-control" id="projectName" name="title"> --}}
                        <input @class(['form-control', 'is-invalid' => $errors->has('title')]) name="title" type="text" id="projectName"
                        value="{{ old('title', $categories->title) }}" placeholder="eg. Off-White" required />
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror



                        <label class="mt-4">Description</label>
                        <p class="form-text text-muted text-xs ms-1 d-inline">
                            (optional)
                        </p>
                        <textarea name="description" style="display:none" id="hiddenArea">
                                dsdsa
                                </textarea>

                        <div id="editor" class="h-50" name="description">
                            {{-- <p>Some<strong>bold</strong></p> --}}
                            {!! old('description', $categories->description) !!}
                        </div>


                        <label class="mt-4 form-label">Upload Image</label>

                        <div class="fallback" class="form-control dropzone" id="dropzone" name="image">
                            <input name="image" type="file" value="{{ old('image', $categories->image) }}" multiple />
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>



                        <div class="d-flex justify-content-end mt-4">
                            {{-- <button type="button" class="btn btn-light m-0">Cancel</button> --}}
                            <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Create Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script>
        // if (document.getElementById('editor')) {
        //     var quill = new Quill('#editor', {
        //         theme: 'snow' // Specify theme in configuration
        //     });
        // }

        if (document.getElementById('editor')) {
            var quill = new Quill('#editor', {
                theme: 'snow' // Specify theme in configuration
            });


            $("#blogform").on("submit", function() {
                $("#hiddenArea").val($("#editor").html());
            });
        };


        if (document.getElementById('choices-multiple-remove-button')) {
            var element = document.getElementById('choices-multiple-remove-button');
            const example = new Choices(element, {
                removeItemButton: true
            });

            example.setChoices(
                [{
                        value: 'One',
                        label: 'Label One',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Label Two',
                        selected: true
                    },
                    {
                        value: 'Three',
                        label: 'Label Three'
                    },
                ],
                'value',
                'label',
                false,
            );
        }

        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            }); // flatpickr
        }

        Dropzone.autoDiscover = false;
        var drop = document.getElementById('dropzone')
        var myDropzone = new Dropzone(drop, {
            url: "/file/post",
            addRemoveLinks: true

        });
    </script>
@endpush
