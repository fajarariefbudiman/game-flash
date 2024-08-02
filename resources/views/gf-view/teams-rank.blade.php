<x-header title="Teams" />
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
        <a href="/" class="text-white me-3 fw-semibold text-decoration-none">Teams</a>
        <span class="separator text-white me-3">/</span>
        <a href="/login" class="text-secondary text-decoration-none">Ranking Teams</a>
    </div>
</div>

<div class="container">
        <div class="my-5">

            <form action="{{ route('team.rankings') }}" method="GET">

                <div class="row d-flex align-items-center">

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="search_value" class="form-control border-0">Search</label>
                        <div class="form-group">
                            <input class="form-control mx-3 w-100 border-top-0 border-right-0 border-left-0 rounded-0"
                                   type="search" name="search_value" placeholder="Search" aria-label="Search"
                                   value="{{ request()->get('search_value') }}">
                        </div>
                    </div>

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="name_filter" class="form-control border-0">Name</label>
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" name="name_filter">
                                <option value="" {{ request()->get('name_filter') ? '' : 'selected' }}>Select Name</option>
                                @foreach ($name as $nameItem)
                                    <option value="{{ $nameItem->name }}" {{ request()->get('name_filter') == $nameItem->name ? 'selected' : '' }}>
                                        {{ $nameItem->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="id_filter" class="form-control border-0">ID</label>
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" name="id_filter">
                                <option value="" {{ request()->get('id_filter') ? '' : 'selected' }}>Select ID</option>
                                @foreach ($id as $idItem)
                                    <option value="{{ $idItem->id }}" {{ request()->get('id_filter') == $idItem->id ? 'selected' : '' }}>
                                        {{ $idItem->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col col-lg-2 mx-3 filter-input-container">
                        <label for="owner_filter" class="form-control border-0">Owner</label>
                        <div class="form-group">
                            <select class="js-example-basic-single w-100" name="owner_filter">
                                <option value="" {{ request()->get('owner_filter') ? '' : 'selected' }}>Select Owner</option>
                                @foreach ($owner as $ownerItem)
                                    <option value="{{ $ownerItem->owner }}" {{ request()->get('owner_filter') == $ownerItem->owner ? 'selected' : '' }}>
                                        {{ $ownerItem->owner }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </form>

        </div>

        <div class="my-5 overflow-auto">
            <table class="table table-striped">
                <thead class="">
                    <tr class="text-uppercase ">
                        <th scope="col">POS</th>
                        <th scope="col">ID</th>
                        <th scope="col">Teams</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Stadium</th>
                        <th scope="col">Level</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $index => $team)
                    <tr>

                        <td>{{ $index + 1 + ($teams->currentPage() - 1) * $teams->perPage() }}</td>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->owner }}</td>
                        <td>{{ $team->stadium }}</td>
                        <td>{{ $team->level }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            {{ $teams->links() }}
        </div>

</div>

@endsection
