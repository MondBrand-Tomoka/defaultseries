// docs:
// https://wavesurfer-js.org/
// http://wavesurfer-js.org/docs/

// https://paiza.hatenablog.com/entry/2018/02/15/%E9%9D%A2%E5%80%92%E3%81%AA%E4%BD%9C%E6%A5%AD%E4%B8%8D%E8%A6%81%E3%81%A7%E3%80%81Web%E3%82%A2%E3%83%97%E3%83%AA%E9%96%8B%E7%99%BA%E3%81%8C%E5%8A%87%E7%9A%84%E3%81%AB%E3%81%AF%E3%81%8B%E3%81%A9%E3%82%8B


var wavesurfer = WaveSurfer.create({
	//options 
	// docs  http://wavesurfer-js.org/docs/options.html
    container: '#waveform',
    scrollParent: true,//長いと自動で流れてく
    hideScrollbar: true,
    waveColor: '#667',
    barWidth: 2,
    barHeight: 1, // the height of the wave
    barGap: null, // the optional spacing between bars of the wave, if not provided will be calculated in legacy format
});

//var audio = audiopass;

//wavesurfer.load('pass');
wavesurfer.load('https://mondbrand.net/key/wp-content/uploads/2021/02/月光2.mp3');

wavesurfer.on('ready', function () {
    wavesurfer.play(); //player
    // 動作すると起こるメソッドを入れる。HTML要素（ボタンなど）にonClickを入れても◎
    // https://wavesurfer-js.org/docs/methods.html
});



// html

// <div id="waveform"></div>→waveformが生成される

//　ボタンは別で作る　onclickで
//　<button class="btn btn-primary" onclick="wavesurfer.playPause()">
//   <i class="glyphicon glyphicon-play"></i>
//   Play/Pause
// </button>

					
				

