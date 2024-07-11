<!-- Modal 1 Start -->
<!-- Modal -->
<div class="modal fade ad-modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h1 class="modal-title title fs-16px" id="exampleModal1Label">Add new lesson</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="ad-modal-form">
                        <h6 class="title fs-16px mb-3">Select lesson type</h6>
                        <div class="mb-2">
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-youtube3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-play-alt"></span>
                                    <p class="title">YouTube Video</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-youtube3"
                                    checked>
                                <div class="check"></div>
                            </label>
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-vimeo3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-caret-circle-right"></span>
                                    <p class="title">Vimeo Video</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-vimeo3">
                                <div class="check"></div>
                            </label>
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-videofile3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-video-camera-alt"></span>
                                    <p class="title">Video file</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-videofile3">
                                <div class="check"></div>
                            </label>
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-audiofile3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-volume"></span>
                                    <p class="title">Audio file</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-audiofile3">
                                <div class="check"></div>
                            </label>
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-url3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-link"></span>
                                    <p class="title">Video url [ .mp4 ]</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-url3">
                                <div class="check"></div>
                            </label>
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-document3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-document"></span>
                                    <p class="title">Document file</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-document3">
                                <div class="check"></div>
                            </label>
                            <label class="ad-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                for="radio-text3">
                                <div class="title-icon d-flex align-items-center">
                                    <span class="fi-rr-text"></span>
                                    <p class="title">Text</p>
                                </div>
                                <input class="form-check-input" type="radio" name="leasonType" id="radio-text3">
                                <div class="check"></div>
                            </label>
                        </div>
                        <div class="alert alert-primary ad-alert-primary ad-alert-sm mb-3" role="alert">
                            <p class="title2 fs-14px">Course: <span class="title">WordPress Theme Development with
                                    Bootstrap</span></p>
                        </div>
                        <button type="submit" class="btn ad-btn-primary">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal 1 End -->


<!-- Modal 2 Start -->
<!-- Modal -->
<div class="modal fade ad-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h1 class="modal-title title fs-16px" id="exampleModal2Label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="ad-modal-form">
                        <div class="mb-3">
                            <label for="name" class="form-label ad-form-label">Name</label>
                            <input type="text" class="form-control ad-form-control" id="name"
                                placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label ad-form-label">Email</label>
                            <input type="email" class="form-control ad-form-control" id="email"
                                placeholder="example@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label ad-form-label">Address</label>
                            <input type="text" class="form-control ad-form-control" id="address"
                                placeholder="Address" required>
                        </div>
                        <!-- Select  -->
                        <div class="mb-5">
                            <label for="gender" class="form-label ad-form-label">Gender</label>
                            <select class="wide select-option" id="gender">
                                <option data-display="Select">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Description" class="form-label ad-form-label">Description</label>
                            <textarea class="form-control ad-form-textarea" id="Description" placeholder="Type your keyword"></textarea>
                        </div>

                        <button type="submit" class="btn ad-btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal 2 End -->



<!--Sm Modal 1 Start -->
<!-- Modal -->
<div class="modal fade ad-modal" id="sm-modal1" role="dialog" tabindex="-1" aria-labelledby="sm-modal-label"
    aria-hidden="true">
    <div class="modal-dialog sm-modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h1 class="modal-title title fs-16px" id="sm-modal-label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="ad-modal-form">
                        <div class="sm-modal-content">
                            <p class="fs-14px">Hey word! this is a modal message</p>
                        </div>
                        <div class="d-flex align-item-center justify-content-end gap-2 mt-3">
                            <button type="button" data-bs-dismiss="modal"
                                class="btn ad-btn-outline-secondary">Cancle</button>

                            <button type="submit" class="btn ad-btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sm Modal 1 End -->


<!--Sm Modal 2 Start -->
<!-- Modal -->
<div class="modal fade ad-modal" id="sm-modal2" role="dialog" tabindex="-1" aria-labelledby="sm-modal-label"
    aria-hidden="true">
    <div class="modal-dialog sm-modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h1 class="modal-title title fs-16px" id="sm-modal-label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="ad-modal-form">
                        <div class="sm-modal-content">
                            <input type="text" class="form-control ad-form-control" placeholder=""
                                required="">

                            <div class="mb-4">
                                <select class="wide select-option mt-3">
                                    <option data-display="Select">Select</option>
                                    <option value="#">Option 1</option>
                                    <option value="#">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-item-center justify-content-end gap-2 mt-3">
                            <button type="button" data-bs-dismiss="modal" class="btn ad-btn-light">Cancle</button>

                            <button type="submit" class="btn ad-btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sm Modal 2 End -->


<!--Sm Modal 3 Start -->
<!-- Modal -->
<div class="modal fade ad-modal" id="sm-modal3" role="dialog" tabindex="-1" aria-labelledby="sm-modal-label"
    aria-hidden="true">
    <div class="modal-dialog sm-modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h1 class="modal-title title fs-16px" id="sm-modal-label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="ad-modal-form">
                        <div class="sm-modal-content">
                            <input type="text" class="form-control ad-form-control" placeholder=""
                                required="">

                            <div class="mb-4">
                                <select class="wide select-option mt-3">
                                    <option data-display="Select">Select</option>
                                    <option value="#">Option 1</option>
                                    <option value="#">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-item-center justify-content-end gap-2 mt-3">
                            <button type="button" data-bs-dismiss="modal"
                                class="btn btn-transparent">Cancle</button>

                            <button type="submit" class="btn ad-btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sm Modal 3 End -->
