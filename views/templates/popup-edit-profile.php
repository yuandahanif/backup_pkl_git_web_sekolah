<!-- profile edit -->
 <div class="profile-edit-close event-modal-profile" id="profile-edit">
        <div class="colse" id="close-edit-profile"><i class="fas fa-times"></i></div>
        <div class="container-profile">
            <form action="<?= BASEURL ?>update/editprofile/<?= $data['url_asal'] ?>" method="post" id="edit-profile" enctype="multipart/form-data">
                <div class="img-profile-update" style="background: url(<?= BASEURL;?>user/profile/img/<?= $data['profile']['avatar_user']?>);">
                    <!-- <div class="img-user" > -->
                    <input type="file" name="foto-baru" id="foto-baru">
                </div>
                <div class="status">
                        <input type="text" name="quotes" id="quotes" placeholder="your quotes (optionap)" value="<?= $data['user']['quotes'] ?>">
                    </div>
                <i class="fas fa-chevron-down triger-adv" id="triger-adv"></i>
                <div class="adv-input" id="adv-input">
                    <div class="username">
                        <input required type="text" name="username" id="username" placeholder="Username" disabled="disabled" value="<?= $data['user']['username'] ?>">
                    </div>
                    <!-- TODO: email -->
                    <div class="email">
                        <input required type="email" name="email" id="email" placeholder="email" disabled="disabled" value="<?= $data['user']['email'] ?>">
                    </div>
                    <!-- TODO: password -->
                    <div class="old-password">
                        <input type="password" name="old-password" id="old-password" placeholder="old password" disabled="disabled">
                    </div>
                    <div class="new-password">
                        <input type="password" name="new-password" id="new-password" placeholder="new password" disabled="disabled">
                    </div>
                    <div class="new-password-conf">
                        <input type="password" name="new-password-conf" id="new-password-conf" placeholder="confirm new password" disabled="disabled">
                    </div>
                </div>
                <div class="update">
                    <button type="submit" name="update">Update data</button>
                </div>
            </form>
        </div>
    </div>