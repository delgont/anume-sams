@extends('layouts.empty')

@section('title', 'Home')

@section('content')
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 text-center font-weight-900 py-3">
                    <h2>Online Application Portal</h2>
                </div>
                <div class="col-lg-6 offset-lg-3 alert-white border border-info rounded shadow-sm py-3">
                    <div class="logo-wrapper text-center p-2">
                        <img src="{{ asset('img/aamsnm_logo.jpg') }}" class="w-25" alt="Alice Anume Logo" />
                    </div>
                    <div>
                       <h6 class="font-weight-900">Intakes</h6>
                    </div>
                    <div class="intakes">
                        <div class="table table-responsive">
                            <table class="table-borderless table-stripped">
                                <thead>
                                    <th>Intake</th>
                                    <th>Opening</th>
                                    <th>Deadline</th>
                                    <th>
                                      Action
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                     <td>May 2023</td>
                                     <td>26-03-2023</td>
                                     <td>26-03-2023</td>
                                     <td>
                                      <a href="" class="">Click To Apply</a>
                                     </td>
                                    </tr>
                                    <tr>
                                     <td>May 2023</td>
                                     <td>26-03-2023</td>
                                     <td>26-03-2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection