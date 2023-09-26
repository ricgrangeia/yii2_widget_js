# Javascript Inside Views for Yii2

`author: Ricardo Grangeia Dias <ricardograngeia@gmail.com>`

### Installation



### Another way to use javascript inside views
### Usage
Very simple to use, just put the code inside the begin and end methods.
```php
<?php JS::begin(); ?>
    <script>
        function myFunction() {
            alert("I am an alert box!");
        }
        myFunction();
    </script>
<?php JS::end(); ?>
```
Is possible to use the position parameter to change the position of the script tag.
```php
<?php JS::begin( [ 'position' => \yii\web\View::POS_END ] ); ?>
    <script>
        function myFunction() {
            alert("I am an alert box!");
        }
        myFunction();
    </script>
<?php JS::end(); ?>
```
### Previous work and credits
* First Author: Angel_De_La_Noche
* https://forum.yiiframework.com/t/javascript-inside-views/63743/3
