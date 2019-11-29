<?php 
include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt--5">
        <div class="panel panel-primary">
            <div class="panel-heading">Wordpress Posts
                <a class="btn btn-success pull-right ml--5"
                data-toggle="modal" data-target="#createPost">
                    + Create new post
                </a>
            </div>
            <div class="panel-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>A system architect is someone who ..</td>
                            <td>test-post</td>
                            <td>publish</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-info"
                                    data-toggle="modal" data-target="#postEdit">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Modal -->
    <div id="createPost" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create post</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="javascript:void(0)" id="wpForm">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Title">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter tilte">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" rows="5" id="content"></textarea>                        
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" id="wpBtn" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="postEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit post</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tilte">Title:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="tilte" placeholder="Enter tilte">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="content"></textarea>                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let url = "<?php echo $site_url; ?>";
    </script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.dataTables.min.js"></script>
    <script src="./assets/js/index.js"></script>

</body>
</html>