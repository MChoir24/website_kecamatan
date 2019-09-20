@extends('layouts.app')

@section('path')
iklim
@endsection

@section('title')
Iklim
@endsection

@section('active3')
    active
@endsection

@section('content')

<div class="row">
    <div class="col mx-auto">
        <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-3">
                {{-- <span class="section-heading-upper">Come On In</span> --}}
                <span class="section-heading-lower">Iklim</span>
            </h2>
            <form class="text-center mb-2">
                <div class="form-row justify-content-md-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Tahun...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Last</th>
                            <th scope="col">Last</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>
                                @mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>
                                @fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>
                                @twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <p class="address mb-5">
                <em>
                    <strong>1116 Orchard Street</strong>
                    <br>
                    Golden Valley, Minnesota
                </em>
            </p>
            <p class="mb-0">
                <small>
                    <em>Call Anytime</em>
                </small>
                <br>
                (317) 585-8468
            </p> --}}
        </div>
    </div>
</div>
@endsection
