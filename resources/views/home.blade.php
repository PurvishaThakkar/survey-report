@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Our Survey Consultancy consists of a well-experienced team of registered surveyors and a Professional management team. Our team has the technical expertise, equipment and the technology to deliver the best solutions to our clients; and to our clients’ our company is known to be reliable, delivers projects on time and within an agreed budget, and adheres to the highest ethical industry standards.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
