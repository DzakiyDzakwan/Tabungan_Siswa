<?php 
    use App\Models\Category;
    $datanya = Category::all();

?>
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>IDku</th>
            <th>Category<i class="fa fa-sort"></i></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datanya as $data)   
            <tr>
                <td>{{ $data->category_id }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                    <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
            </tr>    
        @endforeach     
    </tbody>
</table>
<div class="clearfix">
    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
    <ul class="pagination">
        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="page-item active"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>