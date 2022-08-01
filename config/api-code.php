<?php

return [

    'status' => [
        'success' => true,
        'error' => false,
    ],
    'error_code' => [
        'token_not_found' => 111,
        'token_expire' => 112,
        'token_invalid' => 113,
        'token_excep_parser' => 114,
        'parameters_invalid' => 115,
        'data_not_found' => 116,
        'email_not_empty' => 2,
        'password_not_empty' => 3,
        'user_type_not_empty' => 4, //
        'auth_failed' => 5, // password or email invalid
        'confirmation_pending' => 6, // password or email invalid
        'type_exist_invalid' => 7, //このソーシャルアカウントでコーディネーターのアカウントを登録しました。ログインしてください。
        'deactivated' => 8, // user not active
        'name_register_not_empty' => 9,
        'email_register_not_empty' => 10,
        'password_register_not_empty' => 11,
        'user_register_exist' => 12, // user register exist
        'token_social_not_empty' => 13,//Token social not empty
        'token_social_invalid' => 14, //Token social invalid',
        'email_duplicate' => 15, //Email da ton tai',
        'coordinator_no_information' => 17, //coordinator not enought information,
        'not_enought_point' => 18, //coordinator not enought information,
        'user_no_exist' => 19, //coordinator or user not enought information,
        'email_reser_invail' => 20, //その電子メールアドレスを持つユーザーは見つかりません
        'not_change_price' => 21, //あなたのアカウントに依頼がありますので、料金を変更しないでください。
        'amount_exceed' => 22, //ポイント出金依頼は所有ポイントを超えました。
        'confirm_email' => 23, //あなたのアカウントは正常に作成されました。 あなたのアカウントを確認するための電子メールをお送りしました。
        'email_invalid' => 24,
        'error_own_block' => 25, //このユーザーと対話することはできません。
        'error_payjp' => 300, //xu ly that bai,
        'fail_process' => 500, //xu ly that bai,
        'no_permission' => 403, //no permission,
    ],
    'character' => [
        'pre_email' => '@@',
        'pre_password' => '@@',
        'after_password' => '@@',
    ],
];
