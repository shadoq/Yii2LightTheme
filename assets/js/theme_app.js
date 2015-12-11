/**
 *
 * @type {{}}
 */
if (typeof jQuery === "undefined") {
	throw new Error("ShdTheme requires jQuery");
}

$.Yii2LightTheme = {};
$.Yii2LightTheme.options = {

	//
	// Animation of sidebar
	// integer as milliseconds or 'fast', 'normal', 'slow'
	//
	animationSpeed: 50,

	//
	// Control sidebar toggle button
	//
	controlSidebar: true,
	sidebarOptions: {
		buttonSelector: ".sidebar-toggle",
		sidebarSelector: ".control-sidebar",
		slide: true
	}
};

$(function () {

	var options = $.Yii2LightTheme.options;
	$.Yii2LightTheme.tree('.sidebar');
	if (options.controlSidebar) {
		$.Yii2LightTheme.sidebarToggle();
	}
});

$.Yii2LightTheme.tree = function (menu) {

	var animationSpeed = $.Yii2LightTheme.options.animationSpeed;
	$(document).on('click', menu + ' li a', function (e) {
		var $this = $(this);
		var checkElement = $this.next();

		if ((checkElement.is('.treeview-menu')) && (checkElement.is(':visible'))) {
			if (!$('body').hasClass('sidebar-simple')) {
				checkElement.slideUp(animationSpeed, function () {
					checkElement.removeClass('menu-open');
				});
				checkElement.parent("li").removeClass("active");
			}
		} else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {

			if (!$('body').hasClass('sidebar-simple')) {

				var parent = $this.parents('ul').first();
				var ul = parent.find('ul:visible').slideUp(animationSpeed);
				ul.removeClass('menu-open');
				var parent_li = $this.parent("li");

				checkElement.slideDown(animationSpeed, function () {
					checkElement.addClass('menu-open');
					parent.find('li.active').removeClass('active');
					parent_li.addClass('active');
				});
			}

		}
		if (checkElement.is('.treeview-menu')) {
			e.preventDefault();
		}
	});
};

$.Yii2LightTheme.sidebarToggle = function () {

	var options = $.Yii2LightTheme.options.sidebarOptions;
	var sidebar = $(options.sidebarSelector);
	var button = $(options.buttonSelector);

	button.on('click', function (e) {
		e.preventDefault();
		if (!sidebar.hasClass('control-sidebar-open') && !$('body').hasClass('control-sidebar-open')) {
			$.Yii2LightTheme.sidebarOpen(sidebar, options.slide);
		} else {
			$.Yii2LightTheme.sidebarClose(sidebar, options.slide);
		}
		return false;
	});

	if ($('body').hasClass('sidebar-collapse')) {
		sidebar.addClass('sidebar-collapse');
		sidebar.addClass('control-sidebar-open');
	}
};

$.Yii2LightTheme.sidebarOpen = function (sidebar, slide) {
	if (slide) {
		sidebar.addClass('control-sidebar-open');
	} else {
		$('body').addClass('control-sidebar-open');
	}
	$('body').addClass('sidebar-collapse');
	sidebar.addClass('sidebar-collapse');
};
$.Yii2LightTheme.sidebarClose = function (sidebar, slide) {
	if (slide) {
		sidebar.removeClass('control-sidebar-open');
	} else {
		$('body').removeClass('control-sidebar-open');
	}
	$('body').removeClass('sidebar-collapse');
	sidebar.removeClass('sidebar-collapse');
};

