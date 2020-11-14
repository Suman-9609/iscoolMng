<!-- Admin header include -->
<?php
include("adminInclude/header.php");
?>


<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Courses</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">22</th>
                <td>HTML</td>
                <td>W3School</td>
                <td>
                    <button type="submit" class="btn btn-info" name="view" value="View">
                        <i class="fas fa-pen"></i>
                    </button>
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<div>
    <a href="addCourse.php" class="btn btn-danger box"> <i class="fas fa-plus fa-2x"></i> </a>
</div>
<!-- Admin footer include -->
<?php
include("adminInclude/footer.php");
?>