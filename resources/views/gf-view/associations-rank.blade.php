<x-header title="Association"/>
@extends('layout.main')
@section('container')
<style>
    body{
        background-color: #fefefe !important;
    }
</style>
<div class="position-relative" style="width: 100%; height: 300px;">
    <img src="image/3.png" alt="" class="w-100 h-100" style="filter: brightness(30%);">
    <div class="position-absolute top-50 start-50 translate-middle d-flex align-items-center text-white">
        <a href="/" class="text-white me-3 fw-semibold text-decoration-none">Associations</a>
        <span class="separator text-white me-3">/</span>
        <a href="/login" class="text-secondary text-decoration-none">Ranking Associations</a>
    </div>
</div>

<div class="container">

        <div class="my-5">
            <form action="" method="get">

                <div class="row d-flex align-items-center">

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="exampleFormControlSelect1" class="form-control border-0">Name</label>
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" name="state">
                                @for ($i = 1; $i <= 300; $i++)
                                <option value=" state {{$i}}">Name Tim{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="exampleFormControlSelect1" class="form-control border-0">ID</label>
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" name="state">
                                @for ($i = 1; $i <= 300; $i++)
                                <option value=" state {{$i}}">ID {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="exampleFormControlSelect1" class="form-control border-0">Tier</label>
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" name="state">
                                @for ($i = 1; $i <= 300; $i++)
                                <option value=" state {{$i}}">Tier {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                </div>

            </form>
        </div>

        <table class="table transparent-table my-2">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">Pos</th>
                    <th scope="col">ID</th>
                    <th scope="col">Association</th>
                    <th scope="col">Created_At</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($associations as $index => $association)
                <tr>
                    <td> {{ $index + 1 + ($associations->currentPage() - 1) * $associations->perPage() }} </td>
                    <td> {{ $association->id }} </td>
                    <td> {{ $association->name }} </td>
                    <td> {{ $association->created_at }} </td>
                    <td>2024-07-25</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $associations->links() }}
        </div>

</div>

@endsection
