@extends('web.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div id="main" style="margin-top: 50px;">
    <div class="inner">
      <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>

      <div class="image main">
        <img src="images/blog-fullscreen-1-1920x700.jpg" class="img-fluid" alt="" />
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium maxime enim rem laborum provident
        culpa, nemo illo voluptatem vero similique, sapiente dolorum tempore, eos facere laboriosam excepturi
        nisi facilis nulla!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nostrum ad rerum odio expedita unde
        facilis, harum praesentium quibusdam veniam officiis totam, iusto esse cupiditate fugiat illo a dicta
        quod. Voluptatibus nam sapiente repellat accusamus ex quam eligendi inventore nemo.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ducimus numquam, ad reprehenderit
        quisquam nobis suscipit reiciendis consequuntur officia earum, assumenda illo maiores! Voluptates harum
        blanditiis non amet ex dignissimos expedita quis provident dolore voluptatum laudantium quam in nemo
        voluptatibus, fugit facilis voluptate, commodi quisquam corporis sed possimus. Sit, voluptate?</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam mollitia, obcaecati aperiam temporibus
        dicta voluptates, incidunt quibusdam eos a debitis molestias dolores quas. Culpa itaque dignissimos,
        nulla sequi velit repellat?</p>
    </div>
  </div>

  <!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <section>
        <h2>{{__('messages.comment')}}</h2>

        <form method="post" action="#">
          <div class="fields">
            <div class="field half">
              <input type="text" name="name" id="name" placeholder="{{__('messages.name')}}" />
            </div>

            <div class="field half">
              <input type="text" name="email" id="email" placeholder="Email" />
            </div>

            <div class="field">
              <textarea name="message" id="message" rows="3" placeholder="{{__('messages.content')}}"></textarea>
            </div>

            <div class="field text-right">
              <label>&nbsp;</label>

              <ul class="actions">
                <li><input type="submit" value="Submit" class="primary" /></li>
              </ul>
            </div>
          </div>
        </form>
      </section>

    </div>
    @endsection