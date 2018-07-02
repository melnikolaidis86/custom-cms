<footer class="footer section-dark bg-dark">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a rel="tooltip" class="text-warning" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/saeathens?lang=el" target="_blank">
                                <i class="fa fa-twitter"></i>
                                <p class="d-lg-none">Twitter</p>
                            </a>
                        </li>
                        <li>
                            <a rel="tooltip" class="text-warning" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/SAEATHENS/" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                                <p class="d-lg-none">Facebook</p>
                            </a>
                        </li>
                        <li>
                            <a rel="tooltip" class="text-warning" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/sae_athens/?hl=el" target="_blank">
                                <i class="fa fa-instagram"></i>
                                <p class="d-lg-none">Instagram</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> Mel Nikolaidis
                    </span>
                </div>
            </div>
        </div>
    </footer>


</div>



<!-- Modal Bodies come here -->

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to logout?
            </div>
            <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" data-dismiss="modal">No</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" id="logout" class="btn btn-danger btn-link">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="form-group">
                  <label for="">Search for a topic</label>
                  <input type="text" class="form-control" id="search-query" aria-describedby="helpId" placeholder="Search...">
                </div>
            </div>
            <div id="search-result" class="modal-body"></div>
        </div>
    </div>
</div>

<!-- Delete Topic Modal -->
<div class="modal fade" id="deleteTopicModal" tabindex="-1" role="dialog" aria-labelledby="deleteTopicModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Delete Topic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to delete this topic?
            </div>
            <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" data-dismiss="modal">No</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" id="deleteTopic" class="btn btn-danger btn-link">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Comment Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Edit this comment?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group w-100">
                    <textarea class="form-control" id="commentText" name="commentText" rows="10" cols="20"><?php echo $comment->text; ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" data-dismiss="modal">No</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" id="editComment" class="btn btn-danger btn-link">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Comment Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Delete Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to delete this comment?
            </div>
            <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" data-dismiss="modal">No</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" id="deleteComment" class="btn btn-danger btn-link">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
<!-- Core JS Files -->
<script src="./assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="./assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="./assets/js/popper.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="./assets/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="./assets/js/nouislider.js"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="./assets/js/paper-kit.js?v=2.1.0"></script>

<!--  Custom javascript script -->
<script src="./assets/js/_main.js"></script>
</html>