
                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <div class="row">
                            <div class="col-sm-5 col-lg-3">
                                <!-- Collapsible Inbox Navigation (using Bootstrap collapse functionality) -->
                                <button class="btn btn-app btn-block visible-xs m-b" data-toggle="collapse" data-target="#inbox-nav" type="button">Navigation</button>
                                <div class="collapse navbar-collapse p-x-0" id="inbox-nav">
                                    <!-- Inbox Menu -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Menu</h4>
                                        </div>
                                        <div class="card-block">
                                            <ul class="nav nav-pills nav-stacked">
                                                <li class="active">
                                                    <a href="base_pages_inbox.html">
                  Inbox <span class="badge pull-right">4</span>
                </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                  Starred <span class="badge pull-right">8</span>
                </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                  Sent <span class="badge pull-right">38</span>
                </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                  Draft <span class="badge pull-right">1</span>
                </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                  Archive <span class="badge pull-right">27</span>
                </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                  Trash <span class="badge pull-right">4</span>
                </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                    <!-- End Inbox Menu -->

                                    <!-- Friends -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Friends</h4>
                                            <ul class="card-actions">
                                                <li>
                                                    <button type="button"><i class="ion-more"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-block">
                                            <ul class="list-users">
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="<?=base_url('assets')?>/img/avatars/avatar7.jpg" alt="">
                                                        <i class="ion-record text-green"></i> Jacqueline Scott
                                                        <div class="text-muted"><small>Web Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="<?=base_url('assets')?>/img/avatars/avatar12.jpg" alt="">
                                                        <i class="ion-record text-green"></i> Douglas Bowman
                                                        <div class="text-muted"><small>Graphic Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="<?=base_url('assets')?>/img/avatars/avatar5.jpg" alt="">
                                                        <i class="ion-record hidden"></i> Mildred Matthews
                                                        <div class="text-muted"><small>Photographer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="<?=base_url('assets')?>/img/avatars/avatar2.jpg" alt="">
                                                        <i class="ion-record text-green"></i> Brian Hunt
                                                        <div class="text-muted"><small>Copywriter</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="<?=base_url('assets')?>/img/avatars/avatar9.jpg" alt="">
                                                        <i class="ion-record hidden"></i> Christine Harper
                                                        <div class="text-muted"><small>UI Designer</small></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- End Friends // .card -->

                                    <!-- Account -->
                                    <div class="card">
                                        <div class="card-block text-center bg-img" style="background-image: url('<?=base_url('assets/dist/')?>assets/img/photos/photo2.jpg');">
                                            <img class="img-avatar img-avatar-96 img-avatar-thumb" src="<?=base_url('assets')?>/img/avatars/avatar3.jpg" alt="" />
                                        </div>
                                        <a class="card-block" href="javascript:void(0)">
                                            <table class="card-table text-center">
                                                <tbody>
                                                    <tr class="row">
                                                        <td class="col-xs-6 b-r">
                                                            <div class="m-y-md">
                                                                <i class="ion-ios-cloud-upload-outline fa-3x"></i>
                                                            </div>
                                                        </td>
                                                        <td class="col-xs-6">
                                                            <p class="h3">+ 5GB</p>
                                                            <div class="small text-muted">Upgrade Now</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                    </div>
                                    <!-- .card -->
                                    <!-- End Account -->
                                </div>
                                <!-- End Collapsible Inbox Navigation -->
                            </div>
                            <!-- .col-sm-5 -->

                            <div class="col-sm-7 col-lg-9">
                                <!-- Message List -->
                                <div class="card">
                                    <div class="card-header">
                                        <div class="h4">Inbox</div>
                                        <ul class="card-actions">
                                            <li>
                                                <button class="js-tooltip" title="Previous 15 Messages" type="button" data-toggle="card-action"><i class="ion-ios-arrow-left"></i></button>
                                            </li>
                                            <li>
                                                <button class="js-tooltip" title="Next 15 Messages" type="button" data-toggle="card-action"><i class="ion-ios-arrow-right"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" data-toggle="card-action" data-action="fullscreen_toggle"></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <!-- Messages Options -->
                                        <div>
                                            <button class="btn btn-default pull-right" type="button"><i class="ion-close"></i> <span class="m-l-xs hidden-xs">Delete</span></button>
                                            <p class="btn-group">
                                                <button class="btn btn-default" type="button"><i class="ion-archive"></i> <span class="m-l-xs hidden-xs">Archive</span></button>
                                                <button class="btn btn-default" type="button"><i class="ion-star"></i> <span class="m-l-xs hidden-xs">Star</span></button>
                                            </p>
                                        </div>
                                        <!-- End Messages Options -->

                                        <!-- Messages & Checkable Table (.js-table-checkable class is initialized in App() -> uiHelperTableToolsCheckable()) -->
                                        <div class="pull-r-l">
                                            <table class="js-table-checkable table table-hover table-vcenter m-b-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Terry Carter</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Explore the Wonderful World of Spam</a>
                                                            <div class="text-muted">You xxx-day free trial has started now and..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted"></td>
                                                        <td class="visible-lg text-muted">
                                                            <em>3 days ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center w-10">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500 w-20">Diana Day</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Special Offer: 30% off subscriptions</a>
                                                            <div class="text-muted">It's a pleasure to have you on our service..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted" style="width: 80px;">
                                                            <i class="ion-paperclip"></i> (3)
                                                        </td>
                                                        <td class="visible-lg text-muted w-15">
                                                            <em>2 min ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Deborah Cox</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Apply to the Ambassador program for...</a>
                                                            <div class="text-muted">We are glad you decided to go with a vip..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (2)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>10 min ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Joan Morris</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Inspiration Inside: Welcome to the C...</a>
                                                            <div class="text-muted">An update is under way for your app..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted"></td>
                                                        <td class="visible-lg text-muted">
                                                            <em>25 min ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Betty Torres</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Invoice for transaction 1796151</a>
                                                            <div class="text-muted">You had a new sale and earned..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (1)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>30 min ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Olivia Shaw</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Invoice for transaction 1796150</a>
                                                            <div class="text-muted">Your account is inactive for a long time and..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted"></td>
                                                        <td class="visible-lg text-muted">
                                                            <em>1 hour ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Diana Day</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">You've got a reply from Maria</a>
                                                            <div class="text-muted">This is a notification about our new product..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (1)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>1 day ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Denise Bowman</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Inspiration Inside: Welcome to the C...</a>
                                                            <div class="text-muted">Our Book is out! You can buy a copy and..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (9)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>1 day ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Judy Campbell</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Tim has just replied to your review</a>
                                                            <div class="text-muted">The monthly report you requested for..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (6)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>3 days ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Diana Day</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Welcome to Spam World!</a>
                                                            <div class="text-muted">This is the invoice for the project we..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted"></td>
                                                        <td class="visible-lg text-muted">
                                                            <em>5 days ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Douglas Bowman</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">[PaperShop] Purchase Confirmation</a>
                                                            <div class="text-muted">You have a new friend request. Click the..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (5)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>1 week ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Deborah Roberts</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Enjoy life!</a>
                                                            <div class="text-muted">Thank you for helping us with our cause...</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (3)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>1 week ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Juan Martinez</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">New Twitter follower!</a>
                                                            <div class="text-muted">You have a new follower, congratulations..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <i class="ion-paperclip"></i> (1)
                                                        </td>
                                                        <td class="visible-lg text-muted">
                                                            <em>2 weeks ago</em>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <label class="css-input css-checkbox css-checkbox-default">
                      <input type="checkbox"><span></span>
                    </label>
                                                        </td>
                                                        <td class="hidden-xs font-500">Melissa McCoy</td>
                                                        <td>
                                                            <a class="font-500" data-toggle="modal" data-target="#modal-message" href="#">Huge Discount available!</a>
                                                            <div class="text-muted">Due to the fact that you are a great..</div>
                                                        </td>
                                                        <td class="visible-lg text-muted"></td>
                                                        <td class="visible-lg text-muted">
                                                            <em>3 weeks ago</em>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End Messages -->
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- End Message List -->
                            </div>
                            <!-- .col-sm-7 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                    <!-- Modal -->
                    <div class="modal" id="modal-message" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="card m-b-0">
                                    <div class="card-header bg-green bg-inverse">
                                        <h4>This is a modal message</h4>
                                        <ul class="card-actions">
                                            <li>
                                                <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                            quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                            quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Message -->

                </main>