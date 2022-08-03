
<div class="bg-white rounded-lg shadow-lg p-md-5 p-3 my-5 p-md-5 m-md-5 md:p-20 mx-2">

    <!-- Start of quiz box -->
    @if($quizInProgress)
    <div class="px-md-4 py-md-3 sm:px-6 ">
        <div class="flex max-w-auto justify-between">
            <h1 class="text-sm leading-6 font-medium text-gray-900">
                <span class="text-gray-400 font-extrabold p-1">User</span>
                @if(Auth::user())
                <span class="font-bold p-2 leading-loose bg-blue-500 text-white rounded-lg">{{Auth::user()->name}}</span>
                @endif
            </h1>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                <span class="text-gray-400 font-extrabold p-1">Quiz Progress </span>
                <span class="font-bold p-3 leading-loose bg-blue-500 text-white rounded-full">{{$count .'/'. $quizSize}}</span>
            </p>
        </div>
        <div>
            <h1 id="demo" style="text-align: center;
            font-size: 64px;
            margin-top: 0px;
            color: red;"></h1>
        </div>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-6">
        <form id="myForm" wire:submit.prevent>
            <div class="px-md-4 py-md-5 sm:px-6 sm:rounded-lg">
                <h3 class="text-lg leading-6 mb-2 font-medium text-gray-900">
                    <span class="p-3 fw-bold"> {{$count}}</span>{{$currentQuestion->question}}
                    @if($learningMode)
                    <div x-data={show:false} class="block text-xs">
                        <div class="p-1" id="headingOne">
                            <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none text-xs px-3" type="button">
                                Explanation
                            </button>
                        </div>
                        <div x-show="show" class="block p-2 bg-green-100 text-xs">
                            {{$currentQuestion->explanation}}
                        </div>
                    </div>
                    @endif
                </h3>
                @foreach($currentQuestion->answers as $answer)
                <div class="d-flex flex-column">
                    <label for="question-{{$answer->id}}">
                        <div class="max-w-auto px-3 py-3 m-3 text-gray-800 rounded-lg border-2 border-gray-300 text-sm ">
                            <span class="mr-2 font-extrabold"><input id="question-{{$answer->id}}" value="{{$answer->id .','.$answer->is_checked}}" wire:model="userAnswered" type="checkbox"> </span> {{$answer->answer}}
                        </div>
                    </label>
                </div>
                @endforeach
            </div>
            <div class="d-flex flex-row float-right my-4 m-2">
                @if($count < $quizSize) <button wire:click="nextQuestion" type="button" @if($isDisabled) disabled='disabled' @endif class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    {{ __('Next Question') }}
                    </button>
                    <button type="button" @if($isDisabled) disabled='disabled' @endif wire:click="submitreasult" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Submit Answer</button>
                    @else
                    <button wire:click="nextQuestion" type="button" @if($isDisabled) disabled='disabled' @endif class="inline-flex items-center px-md-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Show Results') }}
                    </button>
                    @endif
            </div>
        </form>
        <script>
            // Set the date we're counting down to
            var minutesToAdd={{$examduration}};
            var currentDate = new Date();
            var countDownDate = new Date(currentDate.getTime() + minutesToAdd*62000);
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get today's date and time
              var now = new Date().getTime();
                
              // Find the distance between now and the count down date
              var distance = countDownDate - now;
                
              // Time calculations for hours, minutes and seconds
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
              // Output the result in an element with id="demo"
              document.getElementById("demo").innerHTML =  hours + "h "
              + minutes + "m " + seconds + "s ";
                
              // If the count down is over, write some text 
              if (distance < 0) {
                clearInterval(x);
                setTimeout(document.getElementById("demo").innerHTML = "Opps! Time Finish..",10000);
                document.getElementById("myForm").submit();
              }
            }, 1000);
            </script>
    </div>
    @endif
    <!-- end of quiz box -->

    @if($showResult)
    <section class="text-gray-600 body-font">
        <div class="bg-white border-2 border-gray-300 shadow overflow-hidden sm:rounded-lg">
            <div class="container px-md-5 py-5 mx-auto">
                <div class="text-center mb-5 justify-center">
                    <h1 class=" sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Quiz Result</h1>
                    @if(Auth::user())
                    <p class="text-md mt-10"> Dear <span class="font-extrabold text-blue-600 mr-2"> {{Auth::user()->name.'!'}} </span> You have secured <a class="bg-green-300 px-2 mx-2 hover:green-400 rounded-lg underline" href="{{route('userQuizDetails',$quizid) }}">Show quiz details</a></p>
                    @endif
                    <progress class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto" id="quiz-{{$quizid}}" value="{{$quizPecentage}}" max="100"> {{$quizPecentage}} </progress> <span> {{$quizPecentage}}% </span>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill=" none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">Correct Answers</span><span class="title-font font-medium">{{$currectQuizAnswers}}</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">Total Answered Questions</span><span class="title-font font-medium">{{$totalQuizQuestions}}</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">Percentage Scored</span><span class="title-font font-medium">{{$quizPecentage.'%'}}</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">Quiz Status</span><span class="title-font font-medium">{{ $quizPecentage > 70 ? 'Pass' : 'Fail' }}</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-center my-4">
                    <a href="{{route('userQuizDetails',$quizid) }}"> <button class="btn btn-info  m-2">See Quizzes Details</button> </a>
                    <a href="{{route('userQuizHome')}}"> <button class="btn btn-success  m-2">See All Your Quizzes</button> </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($setupQuiz)
    <section class="text-gray-600 mx-auto body-font">
        <div class="container px-md-5 py-2 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-md-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                        </svg>
                        <p class="leading-relaxed mb-6">{{$quote->quote}}</p>
                        <a class="inline-flex items-center">
                            <span class="flex-grow flex flex-col">
                                <span class="title-font font-medium text-gray-900">Author</span>
                                <span class="inline-block h-1 w-18 rounded bg-indigo-500 mt-2 mb-1"></span>
                                <span class="text-gray-500 text-sm">{{$quote->author}}</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="p-md-4 md:w-1/2 w-full">
                    <form wire:submit.prevent="startQuiz">
                        @csrf
                        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Take a Quiz</h2>
                        <div class="relative mx-full mb-4">
                            <select name="section" id="section_id" wire:model="sectionId" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                                @if($sections->isEmpty())
                                <option value="">No Quiz Sections Available Yet</option>
                                @else
                                <option value="">Select a Quiz Lavel</option>
                                @foreach($sections as $section)
                                @if($section->questions_count>0)
                                <option value="{{$section->id}}">{{$section->name}}</option>
                                @endif
                                @endforeach
                                @endif
                            </select>
                            @error('sectionId') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                        </div>
                        @if (!is_null($sectionId))
                        <div class="relative mb-4">
                            <select name="quiz_size" id="quiz_size" wire:model="quizSize" class="max-w-full block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                                <option value="">Select</option>
                                <option value="{{ $lavelqsize->question_size }}">{{ $lavelqsize->question_size }}</option>
                            </select>
                            @error('quizSize') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                        </div>
                        @if($lavelqsize->exam->exam_type == 'Practice')
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input wire:model="learningMode" id="learningMode" name="learningMode" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="learningMode" class="font-medium text-gray-700">Learning Mode?</label>
                                <p class="text-gray-500">If checked, this will enable explanation tab for each question.</p>
                            </div>
                        </div>
                        @endif
                        @else
                        <div class="relative mb-4">
                            <select name="quiz_size" id="quiz_size" wire:model="quizSize" class="max-w-full block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                                <option value="">Select</option>
                                @foreach($sections as $section) <option value="{{ $section->question_size }}">{{ $section->question_size }}</option> @endforeach
                            </select>
                            @error('quizSize') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                        </div>
                        @endif
                        <button type="submit" class="block w-full text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Start Quiz</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>