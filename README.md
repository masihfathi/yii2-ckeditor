ckeditor
========
yii2 ckeditor 

Installation
------------
update ckeditor of MihailDev/yii2-ckeditor package and add bidi plugin
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require masihfathi/yii2-ckeditor "1.4"
```

or add

```
"masihfathi/yii2-ckeditor": "1.4"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;

CKEditor::widget([
    'editorOptions' => [
        'preset' => 'full', //basic, standard, full 
        'inline' => false, //false
    ]
]);

//ActiveForm

echo $form->field($post, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //basic, standard, full
        'inline' => false, //false
    ],
]);
```