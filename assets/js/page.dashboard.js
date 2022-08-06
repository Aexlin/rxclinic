! function(e) {
	var t = {};

	function r(a) {
		if (t[a]) return t[a].exports;
		var o = t[a] = {
			i: a,
			l: !1,
			exports: {}
		};
		return e[a].call(o.exports, o, o.exports, r), o.l = !0, o.exports
	}
	r.m = e, r.c = t, r.d = function(e, t, a) {
		r.o(e, t) || Object.defineProperty(e, t, {
			enumerable: !0,
			get: a
		})
	}, r.r = function(e) {
		"undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
			value: "Module"
		}), Object.defineProperty(e, "__esModule", {
			value: !0
		})
	}, r.t = function(e, t) {
		if (1 & t && (e = r(e)), 8 & t) return e;
		if (4 & t && "object" == typeof e && e && e.__esModule) return e;
		var a = Object.create(null);
		if (r.r(a), Object.defineProperty(a, "default", {
				enumerable: !0,
				value: e
			}), 2 & t && "string" != typeof e)
			for (var o in e) r.d(a, o, function(t) {
				return e[t]
			}.bind(null, o));
		return a
	}, r.n = function(e) {
		var t = e && e.__esModule ? function() {
			return e.default
		} : function() {
			return e
		};
		return r.d(t, "a", t), t
	}, r.o = function(e, t) {
		return Object.prototype.hasOwnProperty.call(e, t)
	}, r.p = "/", r(r.s = 185)
}({
	185: function(e, t, r) {
		e.exports = r(186)
	},
	186: function(e, t) {
		! function() {
			"use strict";
			$('[data-toggle="tab"]').on("hide.bs.tab", function(e) {
				$(e.target).removeClass("active")
			}), Charts.init();
			var e = function(e) {
				var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "line",
					r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
					a = arguments.length > 3 ? arguments[3] : void 0;
				r = Chart.helpers.merge({
					elements: {
						line: {
							fill: "start",
							backgroundColor: settings.charts.colors.area,
							tension: 0,
							borderWidth: 1
						},
						point: {
							pointStyle: "circle",
							radius: 5,
							hoverRadius: 5,
							backgroundColor: settings.colors.white,
							borderColor: settings.colors.primary[700],
							borderWidth: 2
						}
					},
					scales: {
						yAxes: [{
							display: !1
						}],
						xAxes: [{
							display: !1
						}]
					}
				}, r), a = a || {
					labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
					datasets: [{
						label: "Earnings",
						data: [400, 200, 450, 460, 220, 380, 800]
					}]
				}, Charts.create(e, t, r, a)
			};
			! function(e) {
				var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "line",
					r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
				r = Chart.helpers.merge({
					elements: {
						line: {
							fill: "start",
							backgroundColor: settings.charts.colors.area
						}
					}
				}, r);
				Charts.create(e, t, r, {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Traffic",
						data: [10, 2, 5, 15, 10, 12, 15, 25, 22, 30, 25, 40]
					}]
				})
			}("#earningsTrafficChart"),
			function(e) {
				var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "line",
					r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
				r = Chart.helpers.merge({
					scales: {
						yAxes: [{
							ticks: {
								maxTicksLimit: 5,
								callback: function(e) {
									return "" + e + ""
								}
							}
						}]
					},
					tooltips: {
						callbacks: {
							label: function(e, t) {
								var r = t.datasets[e.datasetIndex].label || "",
									a = e.yLabel,
									o = "";
								return 1 < t.datasets.length && (o += '<span class="popover-body-label mr-auto">' + r + "</span>"), o + '<span class="popover-body-value">' + a + "</span>"
							}
						}
					}
				}, r);
				Charts.create(e, t, r, {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Transactions",
						data: [24, 35, 19, 26, 45, 14, 35, 14, 50, 19, 25, 20]
					}]
				})
			}("#transactionsChart"),
			function(e) {
				var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "doughnut",
					r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
				r = Chart.helpers.merge({
					tooltips: {
						callbacks: {
							title: function(e, t) {
								return t.labels[e[0].index]
							},
							label: function(e, t) {
								return '<span class="popover-body-value">' + t.datasets[0].data[e.index] + "%</span>"
							}
						}
					}
				}, r);
				var a = {
					labels: ["United States", "United Kingdom", "Germany", "India"],
					datasets: [{
						data: [25, 25, 15, 35],
						backgroundColor: [settings.colors.success[400], settings.colors.danger[400], settings.colors.primary[500], settings.colors.gray[300]],
						hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
					}]
				};
				Charts.create(e, t, r, a)
			}("#locationDoughnutChart"),
			function(e) {
				var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "doughnut",
					r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
				r = Chart.helpers.merge({
					tooltips: {
						callbacks: {
							title: function(e, t) {
								return t.labels[e[0].index]
							},
							label: function(e, t) {
								return '<span class="popover-body-value">' + t.datasets[0].data[e.index] + "%</span>"
							}
						}
					}
				}, r);
				var a = {
					labels: ["Current Value", null],
					datasets: [{
						data: [75, 25],
						backgroundColor: [settings.colors.primary[500], settings.colors.gray[50]],
						hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
					}]
				};
				Charts.create(e, t, r, a)
			}("#billingChart"), e("#productsChart"),
				function(t) {
					var r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "line",
						a = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
					a = Chart.helpers.merge({
						elements: {
							line: {
								borderColor: settings.colors.success[700],
								backgroundColor: settings.hexToRGB(settings.colors.success[100], .5)
							},
							point: {
								borderColor: settings.colors.success[700]
							}
						}
					}, a), e(t, r, a)
				}("#coursesChart"),
				function(e) {
					var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "roundedBar",
						r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
					r = Chart.helpers.merge({
						barRoundness: 1.2,
						scales: {
							xAxes: [{
								maxBarThickness: 15
							}]
						}
					}, r);
					var a = {
						labels: ["17-20", "21-24", "25-30", "31-40"],
						datasets: [{
							label: "Female",
							data: [75, 31, 60, 75, 40, 65]
						}, {
							label: "Male",
							data: [31, 35, 20, 40, 35, 35],
							backgroundColor: settings.colors.primary[100]
						}]
					};
					Charts.create(e, t, r, a)
				}("#genderChart")
		}()
	}
});