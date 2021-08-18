@extends('dashboard')

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                   
                    <p class="float-end"> <a class="btn btn-secondary btn-sm">Create New</a></p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Category Name </th>                           
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>

                        @if(count($foodcategory) > 1)
                            @foreach($foodcategory as $category)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $category->name }} </td>
                                    <td> action </td>
                                </tr>
                            @endforeach
                        @else
                              <tr>
                                  <td colspan="3"> No Entry Found !  </td>
                               </tr>

                        @endif                        
                         
                        </tbody>
                     
                      </table>
                    
                    </div>
                    <p> {{ $foodcategory->links() }} </p>
                  </div>
                </div>
              </div>
@endsection              