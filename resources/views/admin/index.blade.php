@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
      @component('admin.layouts.menus.sidebar')

      @endcomponent
    <div class="col-md-10">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Active Employees</div>
                    <div class="card-body">
                        <h4 class="text-center">4</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                    <div class="card">
                            <div class="card-header">Current Sales Leader</div>
                            <div class="card-body">
                                <h4 class="text-center">John Leader</h4>
                            </div>
                        </div>
            </div>

            <div class="col-sm-3">
                    <div class="card">
                            <div class="card-header">Sales For Month</div>
                            <div class="card-body">
                                <h4 class="text-center">
                                    5
                                </h4>
                            </div>
                        </div>
            </div>

            <div class="col-sm-3">

                    <div class="card">
                            <div class="card-header">Total Sales Value</div>
                            <div class="card-body">
                                <h4 class="text-center">P42,000</h4>
                            </div>
                        </div>
                    </div>
            </div>
             {{-- End of leaderboard --}}
     <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Unassigned Prospects</div>
                   <ul class="list-group list-group-flush">
                    @for($i = 0; $i < 6; $i++)
                    <li class="list-group-item">
                           Mr. Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                       </li>
                       @endfor
                       <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View All Unassigned Leads</a>
                        </li>
                   </ul>
                   </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Recent Estimates
                    </div>
                    <ul class="list-group list-group-flush">
                        @for($i = 0; $i < 6; $i++)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    Mr. Prospect
                                </div>
                                <div class="col-sm-4">
                                    June 5, 2019
                                </div>
                                <div class="col-sm-4">
                                    Value: P54,700
                                    <span class="float-right btn btn-sm btn-success">Details</span>
                                </div>
                            </div>
                        </li>
                        @endfor
                        <li class="list-group-item">
                                <a href="#" class="btn btn-block btn-md btn-primary">View All Unassigned Leads</a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>

@endsection
