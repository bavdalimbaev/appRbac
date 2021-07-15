<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii RBAC project</h1>
    <br>
</p>

Login TO Project

-------------------

      role                login            password 

      admin               Admin            123123

      manager             Manager          123123

      user                User             123123

-------------------

##dump db
directory: **/web/rbac.sql**

##In SignUp automatic initialize role User

directory: **/vendor/mdmsoft/yii2-admin/models/form/Signup**
```php
signup {
    ...
    if ($user->save()) {
        return $user;
    }
    ...
}
```

edit To
```php
signup {
    ...
    if ($user->save()) {
        $auth = Yii::$app->authManager;
        $authRole = $auth->getRole('user');
        $auth->assign( $authRole, $user->getId() );
        return $user;
    }
    ...
}
```