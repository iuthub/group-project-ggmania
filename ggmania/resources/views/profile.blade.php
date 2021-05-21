@extends('layouts.pattern')
@section('content')

{{--    {"id":1,"name":"Shamsiddin","email":"quyosh.ogli@gmail.com","email_verified_at":null,"created_at":"2021-05-20T20:16:31.000000Z","updated_at":"2021-05-20T20:16:31.000000Z","passport_number":"","birth_date":null,"username":"","phone_number":0,"postal_code":0,"city":"","last_name":""}--}}
<div class="container profile-page">
    <div class="profile-page-header">
        <img src="" alt="" class="user-avatar">
        <div class="main-user-info">
            <span>Name: {{Auth::user()->name}}</span>
            <span>Last name: {{Auth::user()->last_name}}</span>
            <span>E-mail: {{Auth::user()->email}}</span>
        </div>
    </div>
    <div class="profile-page-body">
        <span>Birth date: {{Auth::user()->birth_date}}</span>
        <span>Passport number: {{Auth::user()->passport_number}}</span>
        <span>Postal Code: {{Auth::user()->postal_code}}</span>
        <span>City: {{Auth::user()->city}}</span>
    </div>
</div>
@endsection

<style>
    .profile-page{
        padding: 5vh;
        width: 100%;
        height: 100%;

        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;
    }
    .profile-page-header{
        height: 30%;
        width: 100%;
        display: flex;
        flex-direction: row;

        align-items: center;
        justify-content: center;
    }
    .user-avatar{
        width: 20%;
        height: 100%;
        background: #999;
    }
    .main-user-info{
        width: 70%;
        display: flex;
        flex-direction: column;

        align-items: flex-start;
        justify-content: center;
    }
    .profile-page-body{
        height: 70%;
        width: 100%;

        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;

    }
    .profile-page-body span{
        width: 100%;
        text-align: left;
    }
</style>
