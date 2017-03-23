<!--- Authorize
- Key
- API

- Pages / Groups
- One for each page

- Login
- Login limit
- Login lockout time

- Form Emails
- Emails
- Remove Sensitive info y/n-->

<div class="row" data-base="<?php echo base_url(); ?>">

    <div class="col-lg-4 col-md-6">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-money"></i> Authorize Net</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p>The API Login ID and Transaction Key are two pieces of information unique to your account. They are used to connect your website or other integrated business application to the Authorize.Net Payment Gateway for transaction processing. They are not valid for logging into the Merchant Interface. To find your authorize.net settings visit the following link. </p>
                <a href="https://support.authorize.net/authkb/index?page=content&id=A405" class="btn btn-info" target="_blank">Find Settings</a>
                <br>
                <hr>
                <form id="authorizeSettings">
                    <div class="row">

                        <div class="col-md-6">
                            <label>Authorize.net API Key</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="api_key" class="form-control">
                        </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <label>Authorize.net Key</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="auth_key" class="form-control">
                        </div>

                    </div>

                    <hr>

                    <button id="saveAuthorize" class="btn btn-primary pull-right">Save</button>
                    <button id="removeAuthorizeSettings" class="btn btn-danger pull-left">Delete Settings</button>
                </form>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-lock"></i> Security Settings</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form id="loginSettings">
                    <p>These settings help protect against Brute-force attacks. A Brute-force attack is when an attacker uses a password dictionary that contains millions of words that can be used as a password. Then the attacker tries these passwords one by one for authentication. These settings below will limit the times they can try a set of passwords before locked out.</p>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Allowed failed login attempts before locked out</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="failed" class="form-control" value="8">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Lockout time after too many failed attempts <small>(mins)</small></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="time" class="form-control" value="12">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Emails <small>Separate emails with commas for multiple email address</small></label>
                                <input type="text" class="form-control" name="emails" maxlength="255">
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button id="saveLogin" class="btn btn-primary pull-right">Save</button>
                </form>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">

        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-unlock"></i> Pages for user access restriction</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p>These settings should not be messed with <b>unless you know what you are doing</b>. Listing pages below allows the admin to restrict access based on a page by page basis.</p>
                <hr>

                <div class="row">
                    <div class="col-md-5">
                        <label>Name of the page</label>
                        <div class="form-group">
                            <input type="text" name="page" class="form-control" value="" maxlength="25">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label>Short Description</label>
                        <div class="form-group">
                            <input type="text" name="page" class="form-control" value="" maxlength="40">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <br>
                        <button id="saveLogin" class="btn btn-primary pull-left" style="margin-top:4px">Add</button>
                    </div>
                </div>
                <hr>
                <?php
                    if(!empty($groups)) {
                        echo '<ul clas="list-group" style="padding-left:0">';
                        foreach($groups as $group) {
                            echo '<li class="list-group-item" style="position:relative;">';
                                echo '<h4 class="list-group-item-heading">'.ucwords($group->name).'</h4>';
                                echo '<p class="list-group-item-text">'.$group->description.'</p>';
                                if($group->name != 'admin') {
                                    echo '<span class="deleteGroup" style="position:absolute;top: -15px;right: -15px;">';
                                    echo '<i class="fa fa-times-circle fa-3x pull-right text-danger"></i>';
                                    echo '</span>';
                                }
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                ?>
            </div>
        </div>

    </div>

</div>