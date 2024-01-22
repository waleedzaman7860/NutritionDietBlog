@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">All Blog</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="{{ route('admin.category.create') }}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; New Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table table-flush" id="products-list">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $key=>$category)

                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <h6 class="my-auto">{{$category->title}}</h6>
                                            </div>
                                        </td>
                                        <td class="text-sm">{{ strip_tags($category->description) }}</td>
                                        <td>
                                            <span class="badge badge-danger badge-sm">Not Published</span>
                                        </td>
                                        <td class="text-sm">
                                            <a href="{{ route('admin.category.edit',$category->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit product">
                                                <i class="fas fa-edit text-secondary"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick = "document.getElementById('delete_category_{{$category->id}}').submit()" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete product">
                                                <i class="fas fa-trash text-secondary"></i>

                                            </a>
                                            <form id = "delete_category_{{$category->id}}" action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                                @method('delete')
                                                @csrf

                                                </form>

                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        if (document.getElementById('products-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                searchable: true,
                fixedHeight: false,
                perPage: 7
            });

            document.querySelectorAll(".export").forEach(function(el) {
                el.addEventListener("click", function(e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "soft-ui-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };
    </script>
@endpush
