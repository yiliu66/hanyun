<div id="banner" class="slide-1" coor-rate="0.1" coor="default-banner" role="banner">
        <ul id="J-slide">
            <li class="slide">
                <div class="bg bg-1">
                  <div class="txt-wrap">
                    <div class="txt txt-1">
                      <a href="../items/read" target="_blank" title="提交申请" hidefocus="true" seed="txt-link" smartracker="on">提交申请</a>
                    </div>
                 </div>
                </div>
                <!-- <div class="pic pic-1"></div> -->
                
           </li>
           <li class="slide">
            <div class="bg bg-2">
              <div class="txt-wrap">
              <div class="txt txt-2">
                <a href="../items/cloud" target="_blank" title="提交申请" hidefocus="true" seed="txt-linkT1" smartracker="on">提交申请</a>
                </div>     
            </div>
            </div>
            <!-- <div class="pic pic-2"></div> -->
            </li>
            <li class="slide">
                <div class="bg bg-3">
                  <div class="txt-wrap">  
                  <div class="txt txt-3">
                    <a href="../pages/solutions" target="_blank" title="提交申请" hidefocus="true" seed="txt-linkT2" smartracker="on">提交申请</a>
                </div>               
                </div>
                <!-- <div class="pic pic-3"></div> -->
            </div>
            </li>
            <li class="slide">
                <div class="bg bg-4">
                  <div class="txt-wrap">  
                    <!-- <div class="txt txt-4">
                      <a href="../pages/solutions" target="_blank" title="提交申请" hidefocus="true" seed="txt-linkT3" smartracker="on">提交申请</a>
                    </div> -->               
                  </div>
                </div>
            </li>
      </ul>
    <div id="J-slide-number" class="slide-number">
        <a href="#" class="slide-number-active" hidefocus="true" seed="JSlideNumber-slideNumberActive" smartracker="on">1</a>
        <a href="#" hidefocus="true" seed="JSlideNumber-link" smartracker="on" class="">2</a>
        <a href="#" hidefocus="true" seed="JSlideNumber-linkT1" smartracker="on" class="">3</a>
        <a href="#" hidefocus="true" seed="JSlideNumber-linkT2" smartracker="on" class="">4</a>
    </div>
    </div>
    <SCRIPT type=text/javascript charset=utf-8>
      araleConfig = {
        combo_host: 'https://a.alipayobjects.com',
        combo_path: '/ar/??/'
      }
    </SCRIPT>
    <?php echo $this->Html->script(array('base', 'core')); ?>
    <SCRIPT type=text/javascript>
      var adjust = null, adjustHeight = null,adjustHeightRecord = 0;
      Loader.use('alipay.alipayIndexSimple.main',function(){

        //自适应
        adjust = alipay.index.adjust;

        //图片延时加载
        alipay.index.lazyload($$('noscript'),{
          done:function(){


        //秒杀大神
        alipay.index.banner(4,5000);
      }
    }
    )
    });

    </SCRIPT>
    <SCRIPT type=text/javascript>
      //banner图片轮转
    if (arale.isIE()) {
      Loader.use('aralex.slider.FadeSlider', function() {
        var fs = new aralex.slider.FadeSlider({
          id: "J-slide",
          triggerId: "J-slide-number",
          triggerEvent: "click",
          activeTriggerClass: 'slide-number-active',
          delay: 5000
        });
      });
    } else {
      (function() {
        var banner = document.getElementById('banner');
        var triggers = $$('#J-slide-number a');
        var index = 1;
        for (i = 0; i < triggers.length; i++) {
          var item = triggers[i];
          item.click(function(e) {
            e.preventDefault();
            slideTo(e.target.innerHTML);
          });
        }
        function slideTo(number) {
          index = parseInt(number);
          banner.className = 'slide-' + number;
          for (i = 0; i < triggers.length; i++) {
            triggers[i].removeClass('slide-number-active');
          }
          triggers[index - 1].addClass('slide-number-active');
        }
        var SLIDE;
        SLIDE = setInterval(function() {
          if (index >= 4) index = 0;
          index++;
          slideTo(index);
        }, 5000);
        E.on(banner, 'mouseover', function() {
          clearInterval(SLIDE);
        });
        E.on(banner, 'mouseout', function() {
          SLIDE = setInterval(function() {
            if (index >= 4) index = 0;
            index++;
            slideTo(index);
          }, 5000);
        });
      })();
    }
      E.on($$('#J-slide-number a'), 'click', function(e){
        e.preventDefault();
      });
    </SCRIPT>
