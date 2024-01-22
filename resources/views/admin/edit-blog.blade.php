@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('{{ asset('assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="multisteps-form">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                    <span>1. Product Info</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Media">2.
                                    Media</button>
                                {{-- <button class="multisteps-form__progress-btn" type="button" title="Socials">3.
                                    Socials</button> --}}
                                {{-- <button class="multisteps-form__progress-btn" type="button" title="Pricing">3. --}}
                                {{-- Tags</button> --}}
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form id="blogform" class="multisteps-form__form mb-8"
                                action="{{ route('admin.blog.update', $blog->id) }}" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                @method('PUT')
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Product Information</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Name</label>
                                                <input @class([
                                                    'multisteps-form__input form-control',
                                                    'is-invalid' => $errors->has('name'),
                                                ]) name="name" type="text"
                                                    value="{{ old('name', $blog->name) }}" placeholder="eg. Off-White"
                                                    required />
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Category</label>
                                                {{-- <select class="form-control" name="category_id" id="choices-category">
                                                    @foreach ($categories as $category)

                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select> --}}
                                                </select>
                                                <select class="form-control" name="category_id" id="choices-category"
                                                    value="{{ old('category') }}">
                                                    <option @selected(old('category_id', $blog->category_id) == '1') value="1" selected="">
                                                        Healthy Recipes</option>
                                                    <option @selected(old('category_id', $blog->category_id) == '2') value="2">Special Diet
                                                    </option>
                                                    <option @selected(old('category_id', $blog->category_id) == '3') value="3">Diabetes</option>
                                                    <option @selected(old('category_id', $blog->category_id) == '4') value="4">Meal Plans</option>
                                                    <option @selected(old('category_id', $blog->category_id) == '5') value="5">News</option>
                                                    <option @selected(old('category_id', $blog->category_id) == '5') value="5">Healthy Eating
                                                    </option>
                                                    <option @selected(old('category_id', $blog->category_id) == '5') value="5">Healthy Lifestyle
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="mt-4">Description</label>
                                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                                    (optional)
                                                </p>
                                                <textarea name="description" style="display:none" id="hiddenArea">

                                                </textarea>

                                                <div id="edit-description" class="h-50">
                                                    {!! old('description', $blog->description) !!}
                                                </div>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- {{dd(in_array("choice 3", old('tags', $blog->tags)))}} --}}
                                            <div class="col-12">
                                                <label class="mt-4 form-label">Tags</label>
                                                <select class="form-control" name="tags[]" id="choices-tags" multiple>
                                                    <option @selected(in_array('In Stock', $blog->tags)) value="In Stock">In Stock</option>
                                                    <option @selected(in_array('Out of Stock', $blog->tags)) value="Out of Stock">Out of Stock
                                                    </option>
                                                    <option @selected(in_array('Sale', $blog->tags)) value="Sale">Sale</option>
                                                    <option @selected(in_array('Black Friday', $blog->tags)) value="Black Friday">Black Friday
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 mt-4" type="submit"
                                                title="Next">Next</button>
                                        </div>

                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Media</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Banner Images</label>
                                                <div action="{{ route('admin.blog.media.upload') }}"
                                                    class="form-control dropzone" id="productImg" name="image">
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 " type="button"
                                                title="submit">submitt</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                {{-- <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Socials</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Shoppify Handle</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="@soft" />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>Facebook Account</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="https://..." />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>Instagram Account</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="https://..." />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100"
                                    data-animation="FadeIn">

                                    {{-- {{ dd($errors) }} --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        if (document.getElementById('edit-description')) {
            var quill = new Quill('#edit-description', {
                theme: 'snow' // Specify theme in configuration
            });


            $("#blogform").on("submit", function() {
                $("#hiddenArea").val($("#edit-description").html());
            });
        };

        if (document.getElementById('choices-category')) {
            var element = document.getElementById('choices-category');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };


        if (document.getElementById('productImg')) {

            Dropzone.autoDiscover = false;

            var myDropzone = new Dropzone("div#productImg", {
                url: "{{ route('admin.blog.media.upload') }}",
                paramName: 'image'
            });
            myDropzone.on('sending', function(file, xhr, formData) {
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('blog_id', parseInt('{{ $blog->id }}'));

            });
        };


        if (document.getElementById('choices-sizes')) {
            var element = document.getElementById('choices-sizes');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-currency')) {
            var element = document.getElementById('choices-currency');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-tags')) {
            var tags = document.getElementById('choices-tags');
            const examples = new Choices(tags, {
                removeItemButton: true,
                multiple: true,
            });

            // examples.setChoices(
            //     [{
            //             value: 'One',
            //             label: 'Expired',
            //             disabled: true
            //         },
            //         {
            //             value: 'Two',
            //             label: 'Out of Stock',
            //             selected: true
            //         }
            //     ],
            //     'value',
            //     'label',
            //     false,
            // );
        }
    </script>
    <script src="{{ asset('assets/js/plugins/multistep-form.js') }}"></script>
@endpush
