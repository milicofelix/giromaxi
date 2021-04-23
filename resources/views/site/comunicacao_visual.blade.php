<div id="impressao" class="container-fluid bg-parceiros">
    <div class="my-2 py-4">
        <section class="container">
            <header class="col-md-12">
                <h2 class="text-center">IMPRESSÃO DIGITAL - UV E SOLVENTE
                    <span class="underline"></span>
                </h2>
            </header>
            @foreach($videos as $video)
            <div class="row py-4">
                <div class="col-md-12 col-md-6 col-xs-12">
                    <div class="tabela-preco sombra">
                        <div class="preco-detalhe">
                            <h4 class="py-2">{{$video->title}}</h4>
                            <p class="text-secondary">
                                {{$video->desc}}
                            </p>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div data-id="48e1e7c" class="elementor-element elementor-element-48e1e7c elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-element_type="video.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                <iframe class="elementor-video-iframe" src="https://www.youtube-nocookie.com/embed/{{$video->url_hash}}?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls={{($video->controls)?1:0}}&amp;mute={{($video->mute)?1:0}}&amp;showinfo=1&amp;rel=0&amp;modestbranding={{($video->modestbranding)?0:1}}" {{($video->fullscreen)?'allowfullscreen':''}}></iframe>		</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </div>
</div>