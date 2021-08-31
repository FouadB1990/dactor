
@extends('admin.master')

@section('content')
    


<div class="login-page">
  <div class="form">
    <form class="login-form">
       <p>تسجيل الدخول</p> 
      <input type="text" placeholder="user name"/>
      <input type="password" placeholder="password"/>
      <button class="btn">تسجيل</button>
      <p class="message">نسيت كلمة المرور؟<a href="#">إعادة تعين كلمة المرور</a></p>
      {{-- <p class="message">שכחת סיסמה? <a href="#">שחזור סיסמה</a></p> --}}
    </form>
  </div>
</div>

@endsection
