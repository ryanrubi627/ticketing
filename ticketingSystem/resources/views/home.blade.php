@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ticket</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method>
                        <p>Ticket Number: <input type="text" name="ticket_number" ></p>
                        <p>Description: <input type="textarea" name="description"></p>
                        <p>Importance: <input type="text" name="importance"></p>

                        <input type="submit" name="submit">
                    </form><br>
                    <div>
                        <table border=1>
                            <tr>
                                <th>Ticket Number</th>
                                <th>Description</th>
                                <th>Importance</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



