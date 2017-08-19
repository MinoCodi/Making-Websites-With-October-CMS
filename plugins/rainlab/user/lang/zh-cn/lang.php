<?php

return [
    'plugin' => [
        'name' => '用户',
        'description' => '前台用户管理',
        'tab' => '用户',
        'access_users' => '管理用户',
        'access_groups' => '管理群组',
        'access_settings' => '管理用户设定'
    ],
    'users' => [
        'menu_label' => '用户',
        'all_users' => '所有用户',
        'new_user' => '添加新用户',
        'list_title' => '管理用户',
        'trashed_hint_title' => '用户已经停用了他们的帐户',
        'trashed_hint_desc' => '这个用户已经注销了他们的账号,不在希望它出现在网站上.它们可以通过再次登录才恢复它们的账号.',
        'banned_hint_title' => '用户已被禁止',
        'banned_hint_desc' => '该用户已被管理员禁止，无法登录 .',
        'guest_hint_title' => '这是一个游客',
        'guest_hint_desc' => '该用户仅仅被存储为引用的目的,在登录之前必须要注册.',
        'activate_warning_title' => '用户未激活',
        'activate_warning_desc' => '用户未激活,无法登录.',
        'activate_confirm' => '确认激活该用户?',
        'activated_success' => '用户激活成功',
        'activate_manually' => '手动激活该用户',
        'convert_guest_confirm' => '将游客转换为正常用户?',
        'convert_guest_manually' => '转换为注册用户',
        'convert_guest_success' => '用户已被转换为注册帐户',
        'delete_confirm' => '你确定要删除该用户吗?',
        'unban_user' => '解锁该用户',
        'unban_confirm' => '你确定要解锁该用户?',
        'unbanned_success' => '用户成功被解锁',
        'return_to_list' => '返回用户列表',
        'update_details' => '更新详情',
        'bulk_actions' => '批量操作',
        'delete_selected' => '删除选中用户',
        'delete_selected_confirm' => '删除选中的用户?',
        'delete_selected_empty' => '未选择任何用户.',
        'delete_selected_success' => '成功删除所选用户.',
        'deactivate_selected' => '取消激活',
        'deactivate_selected_confirm' => '取消激活所选的用户?',
        'deactivate_selected_empty' => '没有选中要取消激活的用户.',
        'deactivate_selected_success' => '成功取消激活所选用户.',
        'restore_selected' => '恢复选中用户',
        'restore_selected_confirm' => '恢复选中用户?',
        'restore_selected_empty' => '没有选中要恢复的用户.',
        'restore_selected_success' => '成功恢复选中的用户.',
        'ban_selected' => '禁用所选用户',
        'ban_selected_confirm' => '禁止选中用户?',
        'ban_selected_empty' => '没有选中要禁止的用户.',
        'ban_selected_success' => '成功禁止所选用户.',
        'unban_selected' => '解锁选中用户',
        'unban_selected_confirm' => '解锁选中用户?',
        'unban_selected_empty' => '没有选中要解锁的用户.',
        'unban_selected_success' => '成功解锁选中的用户.',
    ],
    'settings' => [
        'users' => 'Unban',
        'menu_label' => '用户设定',
        'menu_description' => '管理用户设定',
        'activation_tab' => '激活',
        'signin_tab' => '登录',
        'registration_tab' => '注册',
        'notifications_tab' => '通知',
        'allow_registration' => '允许用户注册',
        'allow_registration_comment' => '如果该项被禁止,用户只能被管理员创建.',
        'activate_mode' => '激活模式',
        'activate_mode_comment' => '选择激活方式',
        'activate_mode_auto' => '自动',
        'activate_mode_auto_comment' => '注册成功后自动激活',
        'activate_mode_user' => '用户',
        'activate_mode_user_comment' => '用户使用邮箱激活它们的账号.',
        'activate_mode_admin' => '管理员',
        'activate_mode_admin_comment' => '只能通过管理员来激活用户.',
        'require_activation' => '激活后才能登陆',
        'require_activation_comment' => '用户必须激活后才能登录.',
        'use_throttle' => '登录限制',
        'use_throttle_comment' => '在多次登录失败后挂起用户账号.',
        'block_persistence' => '阻止多终端会话',
        'block_persistence_comment' => '当该项被打开时,用户在同一时间不能登录多个终端.',
        'login_attribute' => '登录字段',
        'login_attribute_comment' => '选择用户登录类型.',
    ],
    'user' => [
        'label' => '用户',
        'id' => 'ID',
        'username' => '用户名',
        'name' => '用户名',
        'name_empty' => 'Anonymous',
        'surname' => '用户姓氏',
        'email' => '邮件',
        'created_at' => '注册时间',
        'last_seen' => '最后登录',
        'is_guest' => '游客',
        'joined' => '加入',
        'is_online' => '现在在线',
        'is_offline' => '当前离线',
        'send_invite' => '通过电子邮件发送邀请',
        'send_invite_comment' => '发送一个欢迎消息,其中包含登录和密码信息',
        'create_password' => '创建密码',
        'create_password_comment' => '输入一个用于登录的新密码.',
        'reset_password' => '重置密码',
        'reset_password_comment' => '通过输入一个新密码来重置当前用户密码.',
        'confirm_password' => '确认密码',
        'confirm_password_comment' => '再次输入密码',
        'groups' => '用户组',
        'empty_groups' => '没有可用的用户组.',
        'avatar' => '头像',
        'details' => '描述',
        'account' => '账号',
        'block_mail' => '屏蔽所有外发的邮件到该用户',
        'status_guest' => '游客',
        'status_activated' => '已激活',
        'status_registered' => '已注册',
    ],
    'group' => [
        'label' => '用户组',
        'id' => 'ID',
        'name' => '组名',
        'description_field' => '描述',
        'code' => '组名代码',
        'code_comment' => '输入用户识别该用户组的唯一代码',
        'created_at' => '创建时间',
        'users_count' => '用户数量'
    ],
    'groups' => [
        'menu_label' => '用户组',
        'all_groups' => '用户组',
        'new_group' => '添加用户组',
        'delete_selected_confirm' => '你确定要删除选中的用户组?',
        'list_title' => '管理用户组',
        'delete_confirm' => '你确定要删除该用户组?',
        'delete_selected_success' => '成功删除选中的用户组.',
        'delete_selected_empty' => '没有选中要删除的用户组.',
        'return_to_list' => '返回用户组列表',
        'return_to_users' => '返回用户列表',
        'create_title' => '创建用户组',
        'update_title' => '编辑用户组',
        'preview_title' => '预览用户组'
    ],
    'login' => [
        'attribute_email' => '邮箱',
        'attribute_username' => '用户名'
    ],
    'account' => [
        'account' => '账号',
        'account_desc' => '用户管理表单.',
        'redirect_to' => '跳转到',
        'redirect_to_desc' => '在更新,登录或者注册后跳转页面.',
        'code_param' => '激活码参数',
        'code_param_desc' => '用于注册激活代码的页面URL参数',
        'invalid_user' => '你输入的账号不存在.',
        'invalid_activation_code' => '提供的激活码不可用.',
        'invalid_deactivation_pass' => '你输入的密码不可用.',
        'success_activation' => '成功激活了你的账号!',
        'success_deactivation' => '成功地注销了你的账户.很抱歉看到你走了!',
        'success_saved' => '设定成功保存!',
        'login_first' => '您需要先登录帐号才能访问该页面!',
        'already_active' => '你的账号已经激活了!',
        'activation_email_sent' => '激活邮件已发送至您的邮箱.',
        'registration_disabled' => '当前不能注册.',
        'sign_in' => '登入',
        'register' => '注册',
        'full_name' => '全名',
        'email' => '邮箱',
        'password' => '密码',
        'login' => '登录',
        'new_password' => '新密码',
        'new_password_confirm' => '确认新密码'
    ],
    'reset_password' => [
        'reset_password' => '重置密码',
        'reset_password_desc' => '找回密码表单.',
        'code_param' => '重置代码参数',
        'code_param_desc' => '用于重置代码的URL参数'
    ],
    'session' => [
        'session' => '会话',
        'session_desc' => '添加用户会话到一个页面来限制页面访问权限.',
        'security_title' => 'Allow only',
        'security_desc' => '允许谁来访问该页面.',
        'all' => '所有',
        'users' => '用户',
        'guests' => '游客',
        'redirect_title' => '跳转至',
        'redirect_desc' => '如果访问被拒绝要跳转的页面.',
        'logout' => '成功退出!'
    ]
];
