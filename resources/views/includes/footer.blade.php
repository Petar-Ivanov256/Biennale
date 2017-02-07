<hr>
<footer id="BladeFooter">
   <div class="container">
       <div class="row">
           <div class="col-md-10 footer-move-left" id="return-footer">
               <div class="col-md-2">
                   <p id="footer_sin">{{ trans('footer.sponsor') }}<br><span id="footer_span">Tianaderrah Foundation</span></p>
               </div>
               <div class="col-md-2">
                   <ul>
                       <li>
                           <a  href="{{ URL::to('/program')}}">{{ trans('footer.program') }}</a>
                       </li>
                       <li>
                           <a  href="{{ URL::to('/terms')}}">{{ trans('footer.regulations') }}</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/apply-for-attendance')}}">{{ trans('footer.form') }}</a>
                       </li>
                       <li>
                           <a  href="{{ URL::to('/vision')}}">{{ trans('footer.vision') }}</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-3">
                   <ul>
                       <li>
                           <a href={{ URL::to('/bachelor')}}>{{ trans('footer.bachelor') }}</a>
                       </li>
                       <li>
                           <a href={{ URL::to('/master')}}>{{ trans('footer.masters') }}</a>
                       </li>
                       <li>
                           <a href={{ URL::to('/phd')}}>{{ trans('footer.phd') }}</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/authors')}}">{{ trans('footer.authors') }}</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-1">
                   <ul>
                       <li>
                           <a href="#">{{ trans('footer.exhibitions') }}</a>
                       </li>
                       <li>
                           <a href="#">{{ trans('footer.workshops') }}</a>
                       </li>
                       <li>
                           <a href="#">{{ trans('footer.lectures') }}</a>
                       </li>
                       <li>
                           <a href="#">{{ trans('footer.gallery') }}</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-2">
                   <ul>
                       <li>
                           <a href="{{ URL::to('/about')}}">{{ trans('footer.about') }}</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/partners')}}">{{ trans('footer.partners') }}</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/contact')}}">{{ trans('footer.contacts') }}</a>
                       <li>
                           <a href="{{ URL::to('/archive')}}">{{ trans('footer.archive') }}</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-2">
                   <form>
                       <label for="email" id="Newsletter">{{ trans('footer.bulletin') }}</label><br>
                       <input type="email" name="email" placeholder="e-mail" id="e-mail"><br><br>
                       <button type="submit" class="btn-submit">{{ trans('footer.subscribe') }}</button>
                   </form>
               </div>
           </div>
       </div>

   </div>
</footer>