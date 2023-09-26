# Javascript Inside Views for Yii2

`author: Ricardo Grangeia Dias <ricardograngeia@gmail.com>`

### Installation

`composer require ricgrangeia/yii2_widget_js`

### Another way to use javascript inside views
### Usage
Very simple to use, just put the code inside the begin and end methods.
```php
<?php \ricgrangeia\Yii2Widgets\JS::begin(); ?>
    <script>
        function myFunction() {
            alert("I am an alert box!");
        }
        myFunction();
    </script>
<?php \ricgrangeia\Yii2Widgets\JS::end(); ?>
```
Is possible to use the position parameter to change the position of the script tag.
```php
<?php \ricgrangeia\Yii2Widgets\JS::begin( [ 'position' => \yii\web\View::POS_END ] ); ?>
    <script>
        function myFunction() {
            alert("I am an alert box!");
        }
        myFunction();
    </script>
<?php \ricgrangeia\Yii2Widgets\JS::end(); ?>
```
### Previous work and credits
* First Author: Angel_De_La_Noche
* https://forum.yiiframework.com/t/javascript-inside-views/63743/3
