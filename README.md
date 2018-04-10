# lveven php 插件 
利用github提交到composer 生成依赖库

#试试css3 和 html5 动画效果


一.@keyframe
    语法：
    @keyframes animationname {
        keyframes-selector {CSS-styles;}
    }
    animationname 是动画名字；
    keyframes-selector帧选择器，用百分比定义，0%-100%，与from-to等价，作用是定义不同时间段的不同样式。 
    用法： 
    @keyframes mymove { 
        0% {top:0px;} 
        25% {top:200px;} 
        50% {top:100px;} 
        75% {top:200px;} 
        100% {top:0px;} 
    }
二. animation
     该属性有8个动画属性，如下：
     animation-name：keyframes名称； 
     animation-duration： 指定完成动画所花费的时间，单位为秒（s）或毫秒（ms）； 
     animation-timing-function： 指定动画的速度曲线，该属性就不详细解释了，与transition的transition-timing-function相同，可见博客：http://blog.csdn.net/picking_up_stones/article/details/54866147 animation-delay：指定在动画开始之间的延迟，单位为秒（s）或毫秒（ms），若为负值表示跳过前几秒执行； animation-iteration-count： 指定动画应该播放的次数，默认为1次，自己也可以定义播放次数，如2, 3, 4…….，以及无限次infinite；

     animation-direction：指定是否应该轮流反向播放动画。
        a. normal：默认值，动画按正常播放;
        b. reverse：动画反向播放;
        c. alternate：动画在奇数次正向播放，在偶数次反向播放；
        d. alternate-reverse：动画在奇数次反向播放，在偶数次正向播放；
        e. initial：设置该属性为它的默认值；
        f. inherit：从父元素继承该属性。

    animation-fill-mode：指定当动画不播放时要应用到的样式（当动画完成时或动画有一个延迟未开始播放时）
        a. none：默认值，表示动画将按预期进行和结束，在动画完成其最后一帧时，动画会反转到初始帧处
        b. forwards：表示动画在结束后继续应用最后的关键帧的位置
        c. backwards：会在向元素应用动画样式时迅速应用动画的初始帧
        d. both：元素动画同时具有forwards和backwards效果

    animation-play-state：指定动画是否正在运行或已暂停，当要实现视频播放效果时使用
        a. paused：指定动画暂停；
        b. running：指定动画运行；