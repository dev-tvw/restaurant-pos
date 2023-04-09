<x-app-layout :assets="$assets ?? []">
    @php
    $lang = App::getLocale();
    @endphp
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Feedbacks Listing</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Phone</th>
                                    <th>Name</th>
                                    <th>Feedback</th>
                                    @if(Auth::user()->user_type == 'admin')
                                        <th>Rating</th>
                                    @endif
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($feedbacks as $feedback)
                                <tr>
                                    <td>{{$feedback->phone}}</td>
                                    <td>{{$feedback->name ? $feedback->name : '-'}}</td>
                                    <td>{{$feedback->feedback}}</td>
                                    @if(Auth::user()->user_type == 'admin')
                                    <td>
                                        @if(count($feedback->ratings))
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($feedback->ratings as $rating)
                                                <tr>
                                                    <td>{{$rating->question->question}}</td>
                                                    <td>{{$rating->rating}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                        -
                                        @endif
                                    </td>
                                    @endif
                                    <td>{{dateformat($feedback->created_at)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
