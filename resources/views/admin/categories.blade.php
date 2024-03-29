@extends('layouts.admin')




@section('content')
<div class="content pb-0">
    <div class="orders">
       <div class="row">
          <div class="col-xl-12">
             <div class="card">
                <div class="card-body">
                   <h4 class="box-title">Categories </h4>
                   <h4 class="box-link"><a href="/add-categories"> Add Categories</a> </h4>
                </div>
                <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                      <table class="table ">
                         <thead>
                            <tr>
                               <th class="serial">#</th>
                               <th>ID</th>
                               <th>Categories</th>
                               <th>Status</th>
                            </tr>
                         </thead>
                         <tbody>
                        
                            <tr>
                               <td class="serial"></td>
                               <td>ID</td>
                               <td>categories</td>
                               <td>
                              
                               
                                  <span class='badge badge-complete'><a href="#">Active</a></span>&nbsp;
                                  <span class='badge badge-pending'><a href="#">Deactive</a></span>&nbsp;
                               
                            <span class='badge badge-edit'><a href="#">Edit</a></span>&nbsp;
                            <span class='badge badge-delete'><a href="#">Delete</a></span>
                             
                               
                               
                               </td>
                            </tr>
                           
                            
                               
                            
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
@endsection