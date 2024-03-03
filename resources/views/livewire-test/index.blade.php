<htnl>
  <head>
    @livewireStyles
  </head>
  <body>
    livewireテスト
    @livewire('counter')
    @livewireScripts

    @if (session()->has('message'))
      <div class="">
        {{ session('message') }}
      </div>
      @endif
  </body>
</htnl>


