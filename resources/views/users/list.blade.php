@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">社員一覧
</div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>氏名</td>
                            <td>役職名</td>
                            <td>メールアドレス</td>
                        </tr>
                        </thead>
                        @foreach($users as $user)  {{-- Controllerから渡された users を foreach で回す --}}
                            <tr>
                                <td>
                                    <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                                </td>
                                <td>{{ $user->role->role_name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </table>

                    {{--  pagenation link -------------------------------------------------------------------------------       --}}
                    <table width="100%">
                        <tr>
                            @if($users->lastPage() > 1)
                                <td width="120px"><a href="{{ $users->url(0) }}">最初のページへ</a></td>
                                <td width="120px">
                                    @if($users->previousPageUrl())
                                        <a href="{{ $users->previousPageUrl() }}">前のページへ</a>
                                    @endif
                                </td>
                                <td width="120px" style="text-align: center">{{ $users->currentPage() }}
                                    / {{ $users->lastPage() }}</td>
                                <td width="120px">
                                    @if($users->nextPageUrl())
                                        <a href="{{ $users->nextPageUrl() }}">次のページへ</a>
                                    @endif
                                </td>
                                <td width="120px"><a href="{{ $users->url($users->lastPage()) }}">最後のページへ</a>
                                </td>

                            @endif
                        </tr>
                    </table>
                    {{--  End of pagenation link -------------------------------------------------------------------------       --}}




                </div>
            </div>
        </div>
    </div>
@endsection
