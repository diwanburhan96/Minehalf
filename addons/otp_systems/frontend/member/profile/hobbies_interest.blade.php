<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Hobbies & Interest')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('hobbies.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="hobbies">{{translate('Hobbies')}}</label>
                  @php $user_hobbies = !empty($member->hobbies->hobbies) ? json_decode($member->hobbies->hobbies) : [] ; @endphp
                  <select class="form-control aiz-selectpicker" name="hobbies" data-live-search="true" multiple>
                        <option value="Painting" @if($user_hobbies ==  'Painting') selected @endif >{{translate('Painting')}}</option>
                        <option value="Cooking" @if($user_hobbies == 'Cooking') selected @endif >{{translate('Cooking')}}</option>
                        <option value="Art & Handicraft" @if($user_hobbies == 'Art & Handicraft') selected @endif >{{translate('Art & Handicraft')}}</option>
                        <option value="Photography" @if($user_hobbies == 'Photography') selected @endif >{{translate('Photography')}}</option>
                        <option value="Film Making" @if($user_hobbies == 'Film Making') selected @endif >{{translate('Film Making')}}</option>
                        <option value="Model Building" @if($user_hobbies == 'Model Building') selected @endif >{{translate('Model Building')}}</option>
                        <option value="Fishing" @if($user_hobbies == 'Fishing') selected @endif >{{translate('Fishing')}}</option>
                        <option value="Dancing" @if($user_hobbies == 'Dancing') selected @endif >{{translate('Dancing')}}</option>               
                        <option value="Singing" @if($user_hobbies == 'Singing') selected @endif >{{translate('Singing')}}</option>
                        <option value="Acting" @if($user_hobbies == 'Acting') selected @endif >{{translate('Acting')}}</option>    
                        <option value="Solving Crosswords Puzzles" @if($user_hobbies == 'Solving Crosswords Puzzles') selected @endif >{{translate('Solving Crosswords Puzzles')}}</option>
                        <option value="Graphology" @if($user_hobbies == 'Graphology') selected @endif >{{translate('Graphology')}}</option>
                        <option value="Playing Musical Instruments" @if($user_hobbies == 'Playing Musical Instruments') selected @endif >{{translate('Playing Musical Instruments')}}</option>
                        <option value="Gardening" @if($user_hobbies == 'Gardening') selected @endif >{{translate('Gardening')}}</option>
                        <option value="Other(Mentioned in Introduction)" @if($user_hobbies == 'Other(Mentioned in Introduction)') selected @endif >{{translate('Other(Mentioned in Introduction)')}}</option>
                    </select>
              </div>
                <div class="col-md-6">
                  <label for="interests">{{translate('Interests')}}</label>
                  @php $user_interests = !empty($member->hobbies->interests) ? json_decode($member->hobbies->interests) : [] ; @endphp
                  <select class="form-control aiz-selectpicker" name="interests" data-live-search="true" multiple>
                        <option value="Writing" @if($user_interests ==  'Writing') selected @endif >{{translate('Writing')}}</option>
                        <option value="Reading Books" @if($user_interests == 'Reading Books') selected @endif >{{translate('Reading Books')}}</option>
                        <option value="Learning" @if($user_interests == 'Learning') selected @endif >{{translate('Learning')}}</option>
                        <option value="Movies" @if($user_interests == 'Movies') selected @endif >{{translate('Movies')}}</option>
                        <option value="Music" @if($user_interests == 'Music') selected @endif >{{translate('Music')}}</option>
                        <option value="Travel & Sightseeing" @if($user_interests == 'Travel & Sightseeing') selected @endif >{{translate('Travel & Sightseeing')}}</option>
                        <option value="Sports" @if($user_interests == 'Sports') selected @endif >{{translate('Sports')}}</option>
                        <option value="Trekking" @if($user_interests == 'Trekking') selected @endif >{{translate('Trekking')}}</option>               
                        <option value="Gaming" @if($user_interests == 'Gaming') selected @endif >{{translate('Gaming')}}</option>
                        <option value="Health & Fitness" @if($user_interests == 'Health & Fitness') selected @endif >{{translate('Health & Fitness')}}</option>    
                        <option value="Yoga & Gyming" @if($user_interests == 'Yoga & Gyming') selected @endif >{{translate('Yoga & Gyming')}}</option>
                        <option value="Social Services" @if($user_interests == 'Social Services') selected @endif >{{translate('Social Services')}}</option>
                        <option value="Politics" @if($user_interests == 'Politics') selected @endif >{{translate('Politics')}}</option>
                        <option value="Net Surfing" @if($user_interests == 'Net Surfing') selected @endif >{{translate('Net Surfing')}}</option>
                        <option value="Blogging" @if($user_interests == 'Blogging') selected @endif >{{translate('Blogging')}}</option>
                        <option value="Other(Mentioned in Introduction)" @if($user_interests == 'Other(Mentioned in Introduction)') selected @endif >{{translate('Other(Mentioned in Introduction)')}}</option>
                  </select>
                </div>
          </div>
          <div class="form-group row">
                <div class="col-md-6">
                  <label for="Music">{{translate('Music')}}</label>
                  @php $user_music = !empty($member->hobbies->music) ? json_decode($member->hobbies->music) : [] ; @endphp
                  <select class="form-control aiz-selectpicker" name="music" data-live-search="true" multiple>
                        <option value="Bollywood Songs" @if($user_music ==  'Bollywood Songs') selected @endif >{{translate('Bollywood Songs')}}</option>
                        <option value="Classical - Carnatic" @if($user_music == 'Classical - Carnatic') selected @endif >{{translate('Classical - Carnatic')}}</option>
                        <option value="Classical - western" @if($user_music == 'Classical - western') selected @endif >{{translate('Classical - western')}}</option>
                        <option value="Pop" @if($user_music == 'Pop') selected @endif >{{translate('Pop')}}</option>
                        <option value="Disco" @if($user_music == 'Disco') selected @endif >{{translate('Disco')}}</option>
                        <option value="Rap" @if($user_music == 'Rap') selected @endif >{{translate('Rap')}}</option>
                        <option value="Jazz" @if($user_music == 'Jazz') selected @endif >{{translate('Jazz')}}</option>
                        <option value="Indipop" @if($user_music == 'Indipop') selected @endif >{{translate('Indipop')}}</option>               
                        <option value="Hip-Hop" @if($user_music == 'Hip-Hop') selected @endif >{{translate('Hip-Hop')}}</option>
                        <option value="Instrumental - Indian" @if($user_music == 'Instrumental - Indian') selected @endif >{{translate('Instrumental - Indian')}}</option>    
                        <option value="Instumental - Western" @if($user_music == 'Instumental - Western') selected @endif >{{translate('Instumental - Western')}}</option>
                        <option value="Ghazals" @if($user_music == 'Ghazals') selected @endif >{{translate('Ghazals')}}</option>
                        <option value="Qawalis" @if($user_music == 'Qawalis') selected @endif >{{translate('Qawalis')}}</option>
                        <option value="Techno" @if($user_music == 'Techno') selected @endif >{{translate('Techno')}}</option>
                        <option value="Classical - Hindustani" @if($user_music == 'Classical - Hindustani') selected @endif >{{translate('Classical - Hindustani')}}</option>
                        <option value="Other" @if($user_music == 'Other') selected @endif >{{translate('Other')}}</option>
                  </select>
                </div>
              <div class="col-md-6">
                  <label for="Books">{{translate('Books')}}</label>
                  @php $user_books = !empty($member->hobbies->books) ? json_decode($member->hobbies->books) : [] ; @endphp
                  <select class="form-control aiz-selectpicker" name="books" data-live-search="true" multiple>
                        <option value="Classic Literature" @if($user_books ==  'Classic Literature') selected @endif >{{translate('Classic Literature')}}</option>
                        <option value="Biographies" @if($user_books == 'Biographies') selected @endif >{{translate('Biographies')}}</option>
                        <option value="History" @if($user_books == 'History') selected @endif >{{translate('History')}}</option>
                        <option value="Poetry" @if($user_books == 'Poetry') selected @endif >{{translate('Poetry')}}</option>
                        <option value="Romance" @if($user_books == 'Romance') selected @endif >{{translate('Romance')}}</option>
                        <option value="Humour" @if($user_books == 'Humour') selected @endif >{{translate('Humour')}}</option>
                        <option value="Science Fiction" @if($user_books == 'Science Fiction') selected @endif >{{translate('Science Fiction')}}</option>
                        <option value="Fantacy" @if($user_books == 'Fantacy') selected @endif >{{translate('Fantacy')}}</option>               
                        <option value="Comics" @if($user_books == 'Comics') selected @endif >{{translate('Comics')}}</option>
                        <option value="Business  Occupational" @if($user_books == 'Business  Occupational') selected @endif >{{translate('Business / Occupational')}}</option>    
                        <option value="Philosophy  Spiritual" @if($user_books == 'Philosophy  Spiritual') selected @endif >{{translate('Philosophy  Spiritual')}}</option>
                        <option value="Self -Development" @if($user_books == 'Self -Development') selected @endif >{{translate('Self -Development')}}</option>
                        <option value="Short Stories" @if($user_books == 'Short Stories') selected @endif >{{translate('Short Stories')}}</option>
                        <option value="Magazines & Newspapers" @if($user_books == 'Magazines & Newspapers') selected @endif >{{translate('Magazines & Newspapers')}}</option>
                        <option value="thriller  Suspense" @if($user_books == 'thriller  Suspense') selected @endif >{{translate('thriller / Suspense')}}</option> 
                  </select>
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="movies">{{translate('Movies')}}</label>
                  <input type="text" name="movies" value="{{ !empty($member->hobbies->movies) ? $member->hobbies->movies : "" }}" class="form-control" placeholder="{{translate('Movies')}}">
              </div>
              <div class="col-md-6">
                  <label for="tv_shows">{{translate('TV Shows')}}</label>
                  <input type="text" name="tv_shows" value="{{ !empty($member->hobbies->tv_shows) ? $member->hobbies->tv_shows : "" }}" placeholder="{{ translate('TV Shows') }}" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="sports">{{translate('Sports')}}</label>
                  <input type="text" name="sports" value="{{ !empty($member->hobbies->sports) ? $member->hobbies->sports : "" }}" class="form-control" placeholder="{{translate('Sports')}}">
              </div>
              <div class="col-md-6">
                  <label for="fitness_activities">{{translate('Fitness Activitiess')}}</label>
                  <input type="text" name="fitness_activities" value="{{ !empty($member->hobbies->fitness_activities) ? $member->hobbies->fitness_activities : "" }}" placeholder="{{ translate('Fitness Activities') }}" class="form-control">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="cuisines">{{translate('Cuisines')}}</label>
                  @php $user_cuisines = !empty($member->hobbies->cuisines) ? json_decode($member->hobbies->cuisines) : [] ; @endphp
                  <select class="form-control aiz-selectpicker" name="cuisines" data-live-search="true" multiple>
                        <option value="South Indian" @if($user_cuisines ==  'South Indian') selected @endif >{{translate('South Indian')}}</option>
                        <option value="Punjabi" @if($user_cuisines == 'Punjabi') selected @endif >{{translate('Punjabi')}}</option>
                        <option value="Gujrati" @if($user_cuisines == 'Gujrati') selected @endif >{{translate('Gujrati')}}</option>
                        <option value="Rajasthani" @if($user_cuisines == 'Rajasthani') selected @endif >{{translate('Rajasthani')}}</option>
                        <option value="Bengali" @if($user_cuisines == 'Bengali') selected @endif >{{translate('Bengali')}}</option>
                        <option value="Konkan " @if($user_cuisines == 'Konkan') selected @endif >{{translate('Konkan ')}}</option>
                        <option value="Chinese" @if($user_cuisines == 'Chinese') selected @endif >{{translate('Chinese')}}</option>
                        <option value="Continental" @if($user_cuisines == 'Continental') selected @endif >{{translate('Continental')}}</option>               
                        <option value="Moghlai" @if($user_cuisines == 'Moghlai') selected @endif >{{translate('Moghlai')}}</option>
                        <option value="Italian" @if($user_cuisines == 'Italian') selected @endif >{{translate('Italian')}}</option>    
                        <option value="Arabic" @if($user_cuisines == 'Arabic') selected @endif >{{translate('Arabic')}}</option>
                        <option value="Thai" @if($user_cuisines == 'Thai') selected @endif >{{translate('Thai')}}</option>
                        <option value="Sushi" @if($user_cuisines == 'Sushi') selected @endif >{{translate('Sushi')}}</option>
                        <option value="Mexican" @if($user_cuisines == 'Mexican') selected @endif >{{translate('Mexican')}}</option>
                        <option value="Lebenese" @if($user_cuisines == 'Lebenese') selected @endif >{{translate('Lebenese')}}</option>
                        <option value="Latin American" @if($user_cuisines == 'Latin American') selected @endif >{{translate('Latin American')}}</option>               
                        <option value="Spanish" @if($user_cuisines == 'Spanish') selected @endif >{{translate('Spanish')}}</option>
                        <option value="Fast Food" @if($user_cuisines == 'Fast Food') selected @endif >{{translate('Fast Food')}}</option>
                        <option value="Other" @if($user_cuisines == 'Other') selected @endif >{{translate('Other')}}</option>
                  </select>
                  
              </div>
              <div class="col-md-6">
                  <label for="dress_styles">{{translate('Dress Styles')}}</label>
                  <input type="text" name="dress_styles" value="{{ !empty($member->hobbies->dress_styles) ? $member->hobbies->dress_styles : "" }}" placeholder="{{ translate('Dress Styles') }}" class="form-control">
              </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
          </div>
      </form>
    </div>
</div>
