<?php
require_once('./includes/header.php');
?>

<div class="app-content">
    <div class="content-wrapper ">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">List of Portfolio</h5>
                        </div>
                        <div class="card-body">
                            
                        <div class="example-container">
                            <div class="example-content">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Portfolio Title</th>
                                            <th scope="col">Portfolio Icon</th>
                                            <th scope="col">Portfolio Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> skfsfsdf</td>
                                            <td>Otto</td>
                                            <td>
                                                <span class="badge badge-success">
                                                    Active
                                                </span>
                                                <span class="badge badge-warning">
                                                    Inactive
                                                </span>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <button class="btn btn-sm btn-primary">Edit</button>
                                                    <button  class="btn btn-sm btn-danger">Delete</button>
                                                </div>
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
    </div>
</div>





<?php
require_once('./includes/footer.php');
?>