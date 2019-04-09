<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Search Users</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <form action="{{ route('searchPost') }}" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control search_text_blue" name="searchText" placeholder="Search users" value="{{ isset($s) ? $s : '' }}"  onclick="this.placeholder = ''" onblur="this.placeholder = ''"> 
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">Search</span></button>                               
                </span>
            </div>
        </form>
        </div>   
        <div class="container">            
            <h2>User details</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Membership Type</th>
                        <th>Membership Expiry Date</th>                            
                        <th>Address</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->membership_type}}</td>
                        <td>{{$user->membership_expiry_date}}
                        @if($user->membership_expiry_date)
                            <span class="text-danger"><b>{{  $today = Carbon\Carbon::now()->diffInDays($user->membership_expiry_date, false) <=30 ? ' * Expiring soon * ' : ''}}</b></span>                            
                        @endif
                        </td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->email}}</td>                            
                    </tr>
                    @endforeach
                </tbody>
            </table>          
        </div>    
    </body>
</html>
