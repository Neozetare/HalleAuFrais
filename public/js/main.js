var rem;
var bar;
var barOffsetTop;

Object.defineProperty(Element.prototype, 'documentOffsetTop', {
	get: function() {
		return this.offsetTop + (this.offsetParent ? this.offsetParent.documentOffsetTop : 0);
	}
});

$(function() {
	rem = parseFloat($("body").css("font-size"));

	bar = document.getElementById("bar");
	var mainContent = document.getElementById("main-content");
	barOffsetTop = mainContent.offsetTop + (mainContent.offsetParent ? mainContent.offsetParent.documentOffsetTop : 0);
	
	testStickyBar();
	document.onscroll = testStickyBar;
	window.onresize = function() {
		barOffsetTop = mainContent.offsetTop + (mainContent.offsetParent ? mainContent.offsetParent.documentOffsetTop : 0);
	}

	$(document).on("swiperight", function(e) {
		if ($(e.swipestart.origin[0]).closest(".disable-open-menu").length == 0)
			openMenu();
	});
	$(document).on("swipeleft", function(e) {
		if ($(e.swipestart.origin[0]).hasClass("disable-open-menu") == false)
			closeMenu();
	});
});

function testStickyBar() {
	if (document.body.scrollTop >= barOffsetTop) {
		bar.classList.add("fixed");
	} else {
		bar.classList.remove("fixed");
	}
}

function openMenu() {
	$("body").addClass("menu-open");
}

function closeMenu() {
	$("body").removeClass("menu-open");
}

function changeHistState(page, param) {
	if (param == "_all") {
		history.replaceState({}, "Halle au Frais", BASE_URI+page);
	} else {
		history.replaceState({}, "Halle au Frais", BASE_URI+page+"/"+param);
	}
}

$(function() {
	var keys = [];
	$(document).keydown(function(e) {
		keys.push(e.keyCode);
		if (keys.toString().indexOf("38,38,40,40,37,39,37,39,66,65,13") >= 0 ) {
			konamiCode();
			keys = [];
		}
	});
});

function konamiCode() {
	$("body").addClass("konami");
	setTimeout(function() {
		$("body").removeClass("konami");
	}, 1000);
}