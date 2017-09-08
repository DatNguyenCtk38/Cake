@component('mail::message')
<img height="300px" width="300px" src="http://itsuperlay.tk/wp-content/uploads/2017/05/beach-hut-237489-1920x480-600x400.jpg">

If you want to embed images, this is how you do it:

![Image of Yaktocat](http://localhost:8080/QuanLyBanhKem/public/source/image/product/1430967449-pancake-sau-rieng-6.jpg)
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
