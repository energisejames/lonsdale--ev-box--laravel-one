@foreach($jobs as $job)
                    <!--div class="es-job">{{ $job->jobAddressLineOne }} <a class="btn btn-primary es-pull-right" href="{{ $job->jobDetailsUrl }}">Details</a></div-->
                    <div class="row">
                        <div class="col-md-2">
                            <input type="checkbox" name="jobs[]"
                            @foreach($job->engineers as $engineer)
                            {{ 
                              $engineer->engineerFirstName == "kam" ? "checked" : ""
                             }} 
                            @endforeach
                            >
                            <!-- ESJF : or is this better? -->
                            <input type="checkbox" 
                            @foreach($job->engineers as $engineer)
                            {{ 
                              $engineer->engineerFirstName->contains("kam") ? "checked" : ""
                             }} 
                            @endforeach
                            >
                            <!-- apply per job button -->
                            <form action="{{ route('engineer_job.create') }}" method="post">
                                <input type="hidden" value="{{ $job->id }}" name="id" />
                                <input type="hidden" value="1" name="engineer_id" />
                                {{ csrf_field() }}
                                <button type="submit">X</button>
                            </form>
                        </div>
                        <div class="col-md-5">
                            Amsterdam
                        </div>
                        <div class="col-md-5">
                            123
                        </div>
                    </div>
                @endforeach