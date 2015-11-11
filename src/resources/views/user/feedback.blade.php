@extends(config('mustard.views.layout', 'mustard::layouts.master'))

@section('title')
    Feedback - {{ $user->username }}
@stop

@section('content')
    <div class="profile">
        <div class="row">
            <h1 class="medium-12 columns">{{ $user->username }} feedback</h1>
        </div>
        <div class="row">
            <div class="medium-12 columns">
                @if ($feedbacks->count())
                    <table class="expand">
                        <thead>
                            <tr>
                                <th>Left by</th>
                                <th>Rating</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbacks as $feedback)
                                <tr>
                                    <td>@include('mustard::user.link', ['user' => $feedback->rater])</td>
                                    <td>
                                        @if ($feedback->isPositive())
                                            <i class="fa fa-plus success"></i>
                                        @elseif ($feedback->isNegative())
                                            <i class="fa fa-minus alert"></i>
                                        @elseif ($feedback->isNeutral())
                                            <i class="fa fa-circle"></i>
                                        @endif
                                        {{ $feedback->rating }}
                                    </td>
                                    <td>{{ $feedback->message }}</td>
                                    <td>{{ mustard_date($feedback->placed) }}</td>
                                    <td><a href="{{ $feedback->purchase->item->url }}">{{ $feedback->purchase->item->name }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ $user->url }}"><i class="fa fa-arrow-circle-left"></i> Return to profile</a>
                @else
                    <p>No feedback received yet.</p>
                @endif
            </div>
        </div>
    </div>
@stop
