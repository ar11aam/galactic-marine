@extends('frontend.layout.main')

@section('main-container')
    <form action="{{ '/searchMtuf' }}">
        <div class="container d-flex justify-content-center">
            <div class="col-7">
                <input type="search" id="search" name="search" class="form-control"
                    placeholder="Search any Part Name or Part Number">
            </div>
            <div class="col-1">
                <button class="btn btn-outline-primary">
                    Search
                </button>
            </div>
        </div>
    </form>

    <div class="container align-items-center">

        <p class="text-center mt-4"> <b> <a href="https://api.whatsapp.com/send?phone=923267326065"> Contact Us
                </a>
                now to place your order. </b> </p>
        <div class="d-flex justify-content-center">
            <div class="left m-2 section-header">
                <h3> MTU </h3>
            </div>
            <div class="dropdown show m-2">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MTU
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/yamaha') }}">Yamaha</a>
                    <a class="dropdown-item" href="{{ url('/man') }}">MAN</a>
                    <a class="dropdown-item" href="{{ url('/zf') }}">ZF</a>
                    <a class="dropdown-item" href="{{ url('/kohler') }}">Kohler</a>
                    <a class="dropdown-item" href="{{ url('/volvo') }}">Volvo</a>
                    <a class="dropdown-item" href="{{ url('/category') }}">Cummins</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container table-responsive">
        <table class="table table-hover">
            <caption>List of Products</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Part Name</th>
                    <th scope="col">Part no.</th>
                </tr>
            </thead>
            <tbody>
                @if (is_countable($mtuf) && count($mtuf))
                    @foreach ($mtuf as $name)
                        <tr>
                            <th scope="row">{{ $name->id }}</th>
                            <td>{{ $name->partName }}</td>
                            <td>{{ $name->partNum }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">No Data found</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
@endsection
