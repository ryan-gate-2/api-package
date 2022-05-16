// This file is generated dynamically per-request and cannot be used directly.
// To use WURFL.js, please see the documentation at https://web.wurfl.io/#wurfl-js
//
// Copyright 2022 - ScientiaMobile, Inc., Reston, VA
// WURFL Device Detection
// Terms of service:
// https://www.scientiamobile.com/terms-service-wurfl-js-imageengine-be/

var WURFL = {
    advertised_browser: "Safari",
    advertised_browser_version: "14.1.2",
    advertised_device_os: "macOS",
    advertised_device_os_version: "10.15.7",
    brand_name: "Apple",
    complete_device_name: "Apple Safari",
    form_factor: "Desktop",
    is_app_webview: !1,
    is_full_desktop: !0,
    is_mobile: !1,
    is_robot: !1,
    is_smartphone: !1,
    is_smarttv: !1,
    is_tablet: !1,
    manufacturer_name: "",
    marketing_name: "",
    max_image_height: 600,
    max_image_width: 800,
    model_name: "Safari",
    physical_screen_height: 400,
    physical_screen_width: 400,
    pointing_method: "mouse",
    resolution_height: 600,
    resolution_width: 800
  },
  wurfl_candidates = [{
    webgl: "a9x gpu",
    chashes: [{
      comment: "12.x",
      chash: -924917326,
      ops_range: [[7.4, 9.5]]
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: [[4.4, 5.2]]
    }, {
      comment: "14.x",
      chash: -876627748,
      ops_range: [[4.6, 5.7]]
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: [[4.6, 5.7]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1366
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 2048,
      resolution_height: 2732,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 197,
      physical_screen_height: 263,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a8x gpu",
    chashes: [{
      comment: "12.x",
      chash: 571797752,
      ops_range: [[15, 18]]
    }, {
      comment: "13.x",
      chash: 961479390,
      ops_range: [[6.8, 7.55]]
    }, {
      comment: "14.x",
      chash: -276884320,
      ops_range: [[7, 8]]
    }, {
      comment: "15.x",
      chash: -1299248554,
      ops_range: [[7, 8]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1024
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Air 2",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Air 2",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1536,
      resolution_height: 2048,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 148,
      physical_screen_height: 198,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a9 gpu",
    chashes: [{
      comment: "12.x",
      chash: -924917326,
      ops_range: [[9.4, 12]]
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: [[5.4, 6.6]]
    }, {
      comment: "14.x",
      chash: -876627748,
      ops_range: [[5.7, 7]]
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: [[5.7, 7]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1024
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad 2017",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad 2017",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1536,
      resolution_height: 2048,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 148,
      physical_screen_height: 198,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a12x gpu",
    chashes: [{
      comment: "12.x",
      chash: -1555617484,
      ops_range: []
    }, {
      comment: "13.x",
      chash: 1370134960,
      ops_range: []
    }, {
      comment: "13.x",
      chash: -131154645,
      ops_range: []
    }, {
      comment: "14.x",
      chash: -2095308119,
      ops_range: [[2.2, 2.4]]
    }, {
      comment: "15.x",
      chash: 1132276657,
      ops_range: [[2.2, 2.4]]
    }],
    js_check_functs: [function(e) {
      return e.devicePixelRatio == 2
    }, function(e) {
      return e.screen.height == 1366
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 12.9 (2018)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 12.9 (2018)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 2048,
      resolution_height: 2732,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 197,
      physical_screen_height: 263,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a9x gpu",
    chashes: [{
      comment: "12.x",
      chash: -924917326,
      ops_range: [[8.39, 9.39]]
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: [[4.45, 5.39]]
    }, {
      comment: "14.x",
      chash: -876627748,
      ops_range: [[4.6, 5.6]]
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: [[4.6, 5.6]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1024
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 9.7",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 9.7",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1536,
      resolution_height: 2048,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 148,
      physical_screen_height: 198,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a10 gpu",
    chashes: [{
      comment: "12.x",
      chash: -924917326,
      ops_range: [[6.5, 8.38]]
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: [[2.8, 4.39]]
    }, {
      comment: "14.x",
      chash: -876627748,
      ops_range: [[3, 4.5]]
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: [[3, 4.5]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1024
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad 2018",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad 2018",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1536,
      resolution_height: 2048,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 148,
      physical_screen_height: 198,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a10x gpu",
    chashes: [{
      comment: "12.x",
      chash: -924917326,
      ops_range: []
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: []
    }, {
      comment: "14.x",
      chash: -876627748,
      ops_range: []
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1112
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 10.5 (2017)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 10.5 (2017)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1668,
      resolution_height: 2224,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 161,
      physical_screen_height: 214,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a10x gpu",
    chashes: [{
      comment: "12.x",
      chash: -924917326,
      ops_range: [[5.5, 7.39]]
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: [[2.6, 4.2]]
    }, {
      comment: "14.x",
      chash: -876627748,
      ops_range: [[2.8, 4.4]]
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: [[2.8, 4.4]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1366
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 12.9 (2017)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 12.9 (2017)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 2048,
      resolution_height: 2732,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 197,
      physical_screen_height: 263,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a12x gpu",
    chashes: [{
      comment: "12.x",
      chash: -1555617484,
      ops_range: []
    }, {
      comment: "13.x",
      chash: 1370134960,
      ops_range: []
    }, {
      comment: "13.x",
      chash: -131154645,
      ops_range: []
    }, {
      comment: "14.x",
      chash: -2095308119,
      ops_range: [[2.2, 2.4]]
    }, {
      comment: "15.x",
      chash: 1132276657,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.devicePixelRatio == 2
    }, function(e) {
      return e.screen.height == 1194
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 11",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 11",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1668,
      resolution_height: 2388,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 160,
      physical_screen_height: 230,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a8 gpu",
    chashes: [{
      comment: "12.x",
      chash: 571797752,
      ops_range: [[18.1, 20]]
    }, {
      comment: "13.x",
      chash: 961479390,
      ops_range: [[7.56, 9]]
    }, {
      comment: "14.x",
      chash: -276884320,
      ops_range: [[8.01, 9]]
    }, {
      comment: "15.x",
      chash: -1299248554,
      ops_range: [[8.01, 9]]
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1024
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad mini 4",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad mini 4",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1536,
      resolution_height: 2048,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 121,
      physical_screen_height: 161,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a12 gpu",
    chashes: [{
      comment: "12.x",
      chash: -1555617484,
      ops_range: []
    }, {
      comment: "13.x",
      chash: 1370134960,
      ops_range: []
    }, {
      comment: "13.x",
      chash: -131154645,
      ops_range: []
    }, {
      comment: "14.x",
      chash: -2095308119,
      ops_range: []
    }, {
      comment: "15.x",
      chash: 1132276657,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1112
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Air (2019)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Air (2019)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1668,
      resolution_height: 2224,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 161,
      physical_screen_height: 214,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a12 gpu",
    chashes: [{
      comment: "12.x",
      chash: -1555617484,
      ops_range: []
    }, {
      comment: "13.x",
      chash: 1370134960,
      ops_range: []
    }, {
      comment: "13.x",
      chash: -131154645,
      ops_range: []
    }, {
      comment: "14.x",
      chash: -2095308119,
      ops_range: []
    }, {
      comment: "14.x",
      chash: -1821413258,
      ops_range: []
    }, {
      comment: "15.x",
      chash: 1132276657,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1024
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad mini (2019)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad mini (2019)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1536,
      resolution_height: 2048,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 121,
      physical_screen_height: 161,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a10 gpu",
    chashes: [{
      comment: "14.x",
      chash: -876627748,
      ops_range: []
    }, {
      comment: "13.x",
      chash: 2048727691,
      ops_range: []
    }, {
      comment: "15.x",
      chash: -1061871976,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1080
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad 2019",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad 2019",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1620,
      resolution_height: 2160,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 156,
      physical_screen_height: 208,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "",
    chashes: [{
      comment: "15.x",
      chash: -291710403,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.devicePixelRatio == 2
    }, function(e) {
      return e.screen.height == 1194
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 12.9 (2020)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 12.9 (2020)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 2048,
      resolution_height: 2732,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 197,
      physical_screen_height: 263,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "a12 gpu",
    chashes: [{
      comment: "14.x",
      chash: -1821413258,
      ops_range: []
    }, {
      comment: "14.x",
      chash: 2095308119,
      ops_range: []
    }, {
      comment: "15.x",
      chash: 1132276657,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1080
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad 2020",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad 2020",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1620,
      resolution_height: 2160,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 156,
      physical_screen_height: 208,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "",
    chashes: [{
      comment: "15.X",
      chash: 814470808,
      ops_range: []
    }, {
      comment: "14.X",
      chash: -118752313,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1180
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Air (2020)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Air (2020)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1640,
      resolution_height: 2360,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 158,
      physical_screen_height: 228,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "",
    chashes: [{
      comment: "14.x",
      chash: 1071155125,
      ops_range: []
    }, {
      comment: "15.x",
      chash: 1230045186,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.devicePixelRatio == 2
    }, function(e) {
      return e.screen.height == 1194
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 11 (2021)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 11 (2021)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 1668,
      resolution_height: 2388,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 160,
      physical_screen_height: 230,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }, {
    webgl: "",
    chashes: [{
      comment: "14.x",
      chash: 1071155125,
      ops_range: []
    }, {
      comment: "15.x",
      chash: -1596601432,
      ops_range: []
    }],
    js_check_functs: [function(e) {
      return e.screen.height == 1366
    }, function(e) {
      return e.devicePixelRatio == 2
    }],
    capabilities: {
      is_mobile: !0,
      complete_device_name: "Apple iPad Pro 12.9 (2021)",
      form_factor: "Tablet",
      brand_name: "Apple",
      model_name: "iPad Pro 12.9 (2021)",
      marketing_name: "",
      manufacturer_name: "",
      resolution_width: 2048,
      resolution_height: 2732,
      max_image_width: 768,
      max_image_height: 1024,
      pointing_method: "touchscreen",
      physical_screen_width: 197,
      physical_screen_height: 263,
      is_full_desktop: !1,
      is_robot: !1,
      is_tablet: !0,
      is_smartphone: !1,
      is_smarttv: !1,
      advertised_browser: "Safari",
      advertised_browser_version: "14.1.2",
      advertised_device_os: "macOS",
      advertised_device_os_version: "10.15.7",
      is_app_webview: !1
    }
  }],
  wurfl_debug = !1,
  wurfl_time_limit = 200,
  WurflJsResolver = function(_, F, S, b) {
    function h() {
      if (null !== e.ml)
        return e.ml;
      try {
        var n = f(d());
        e.ml = n[t("A4C4<0A0|C46")](n[t("=>8BA4E").toUpperCase()]).toLowerCase()
      } catch (t) {
        m.push("getMl(): " + t),
        e.ml = null
      }
      return e.ml
    }
    function u() {
      if (null !== e.unml)
        return e.unml;
      try {
        var n = f(d()),
          s = n[t("=>8B=4CGqC46")](t(">5=8.A4A43=4A.6D143.xsnq&"));
        e.unml = n[t("A4C4<0A0|C46")](s[t('xsnq&.!q!qpzq!.pqw"myz$')]).toLowerCase()
      } catch (t) {
        m.push("getUnml(): " + t),
        e.unml = null
      }
      return e.unml
    }
    function v() {
      if (null !== e.ops)
        return e.ops;
      if (!(t(">C?HA2") in n))
        return -1;
      var o = w,
        i = a(),
        s = g(.5, o, 9);
      return o -= a() - i, s < 20 && (s = g(20 / s, o, 30)), e.ops = s, e.ops
    }
    function A() {
      var e = function() {
          n = 0,
          e = {};
          for (s = {}, n = 0; n < c.length; n++)
            e = c[n],
            s[o(e)] = [];
          for (r = [], n = 0; n < c.length; n++)
            e = c[n],
            T(e) ? (r.push(e), s[o(e)].push("jsfunc[pass]")) : s[o(e)].push("jsfunc[fail]");
          if (0 === r.length)
            return [];
          l = [];
          for (n = 0; n < r.length; n++)
            m = (e = r[n])[t(";614F")],
            null === m || '' == m ? s[o(e)].push("ml[no_ref]") : z(e) ? (l.push(e), s[o(e)].push("ml[pass]")) : s[o(e)].push("ml[fail]");
          if (1 === l.length)
            return l;
          var n,
            e,
            r,
            l,
            m,
            h = [],
            h = 0 < l.length ? l : r,
            d = [],
            f = [],
            i,
            a;
          for (n = 0; n < h.length; n++)
            "chashes" in (e = h[n]) && 0 < e.chashes.length ? d.push(e) : (f.push(e), s[o(e)].push("chash[no_ref]"));
          if (0 === d.length)
            return f;
          var u = [],
            p = [],
            g = j();
          for (n = 0; n < d.length; n++) {
            e = d[n];
            for (i = 0; i < e.chashes.length; i++) {
              if (a = e.chashes[i], "chash" in a && a.chash == g) {
                "ops_range" in a && null !== a.ops_range && 0 < a.ops_range.length ? (s[o(e)].push("chash_" + i + "[pass]"), M(a.ops_range) ? (u.push(e), s[o(e)].push("chash_" + i + "_ops[pass]")) : s[o(e)].push("chash_" + i + "_ops[fail]")) : (p.push(e), s[o(e)].push("chash_" + i + "[pass_no_ops]"));
                break
              }
              s[o(e)].push("chash_" + i + "[fail]")
            }
          }
          return 0 === u.length ? p : u
        }(),
        n;
      if (1 === e.length)
        return e[0];
      if (1 < e.length)
        for (n in e)
          n = e[n],
          s[o(n)].push("fail[ambiguous]");
      return null
    }
    function k(t, n) {
      if (t[0] > n[0])
        return 1;
      if (t[0] < n[0])
        return -1;
      for (var e = 0; e < 3; e++)
        if (t[e] != n[e])
          return t[e] > n[e] ? 1 : -1;
      return 0
    }
    var E,
      y = "11929c5",
      n = _,
      l = n.document,
      e = {
        ml: null,
        unml: null,
        ops: null,
        chash: null
      },
      r = "wurfljs_cache",
      p = !b,
      C = "can",
      x = b,
      c = F,
      O = String.fromCharCode,
      s = {},
      m = [],
      w = S,
      i = 255,
      a = function() {
        return "performance" in n ? n.performance.now() : (new Date).getTime()
      },
      d = function() {
        var n = t("C=4<4;q4C04A2"),
          e = l[n](C + "vas");
        return e.divideMatrixSafe = function(r, i, c) {
          if (.001 < r)
            throw "Field transform error";
          for (var l = i.length, d = i[0].length, a = c[0].length, n = new Array(l), e = 0, t, s, o; e < l; ++e) {
            n[e] = new Array(a);
            for (t = 0; t < a; ++t)
              for (s = n[e][t] = 0; s < d; ++s)
                o = c[s][t],
                0 === o && (o = r),
                n[e][t] += i[e][s] / o
          }
          return n
        }, e.getEpsilon = function() {
          return "EPSILON" in Number ? Number.EPSILON : 1e-12 * Math.PI
        }, e.computeHash = function(n) {
          if (s = e[t("x!$0C0p>C")](), (i = 0) == s.length)
            throw "Empty data";
          for (var s, a = t("Cm43>oA072"), o = 0, r; o < s.length; o++)
            r = s[a](o),
            i = (i << 5) - i + r,
            i &= i;
          if (n = Math.round(Math.abs(i) * n / 1024), 255 < Math.abs(i) || !1 & n)
            throw "Hash consistency check failed";
          return n
        }, e
      },
      f = function(e) {
        return e[t("CG4C=>oC46")](t(";614F"))
      },
      t = function(n) {
        for (var s = [], e = n.length, t; 0 < e; e--)
          t = n.charCodeAt(e - 1) + 49,
          125 <= t && (t -= 93),
          s.push(t);
        return s.map(function(e) {
          return O(e)
        }).join('')
      },
      g = function(s, d, u) {
        for (var r = 0, o = Math.ceil(1e3 * s), l = (16384 < o && (o = 16384, s = 16.384), new Uint32Array(o)), i = 0, e = 0, t, c; e < u; e++) {
          for (t = a(), c = 0; c < 1e3; c++)
            n.crypto.getRandomValues(l);
          if (r += t = a() - t, (0 === e || t < i) && (i = t), 3 <= e && d < r)
            break
        }
        return i / s
      },
      j = function() {
        if (null !== e.chash)
          return e.chash;
        s = d(),
        o = s[t("CG4C=>oC46")](45..toString(16)),
        o.divideMatrixSafe = s.divideMatrixSafe;
        for (var s, o, r = "i9asdm..$#po((^@KbXrww!~cz", c = [["4=8;4B0nCG4C", "?>C"], ["C=>5", "S;08AmSLG?b]"], ["4=8;4B0nCG4C", "28C4107?;0"], ["4C0C>A", [.05]], ['4;HC";;85', "\\b5O"], ["C24!;;85", [125, 1, 62, 20]], ['4;HC";;85', "eb\\O"], ["CG4#;;85", [r, 2, 15]], ['450"G8AC0y438E83', [s.getEpsilon(), [[2, 3], [188, 17]], [[166, 178], [255, 255]]]], ['4;HC";;85', "UcZ\\LX\\LX\\\\^LX^\\]T016A"], ["CG4#;;85", [r, 4, 17]], ["AD;nF>307B", "\\]"], ["A>;>oF>307B", "4D;1"], ["C24!;;85", [-20, 10, 234, 5]]], a = 0, n; a < c.length; a++)
          n = c[a],
          "string" == typeof n[1] ? o[t(n[0])] = t(n[1]) : o[t(n[0])].apply(o, n[1]);
        i = -1;
        try {
          return s.computeHash()
        } catch (e) {
          return i
        }
      },
      M = function(t) {
        for (var n = v(), e = 0, s, o; e < t.length; e++)
          if (s = t[e][0], o = t[e][1], s <= n && n <= o)
            return !0;
        return !1
      },
      o = function(e) {
        return e.capabilities.complete_device_name.replace(".", "_")
      },
      T = function(o) {
        for (var t = o.js_check_functs, i = {
            compareOSVersion: k
          }, e = 0, s; e < t.length; e++)
          if (s = t[e], "function" == typeof s) {
            if (!s(n, i))
              return !1
          } else
            m.push("Non-executable jsfunc test");
        return !0
      },
      z = function(e) {
        return null !== (u() || h()) && (e = e.webgl, "string" == typeof (t = u() || h()) && -1 < t.indexOf(e));
        var t
      };
    if (this.main = function() {
      if (p) {
        var t = function() {
            for (var o = l.cookie.split(";"), t = null, n = 0, s, e; n < o.length; n++)
              if (s = o[n].trim(), 0 == s.indexOf(r)) {
                t = s.substring(r.length + 1, s.length);
                break
              }
            if (null === t)
              return null;
            try {
              return e = JSON.parse(unescape(t)), "version" in e && e.version === y ? (delete e.version, e) : null
            } catch (e) {
              return l.cookie = r + "=", null
            }
          }(),
          i,
          a,
          c,
          o;
        if (null !== t)
          return n.WURFL = t, n.WURFL
      }
      a = n;
      for (i in e)
        c = "__wurfljs_MOCK_" + i.toUpperCase(),
        c in a && void 0 !== a[c] && (e[i] = a[c]);
      return t = A(), t && (n.WURFL = t.capabilities), p && ((t = n.WURFL).version = y, (o = new Date).setTime(o.getTime() + 864e5), o = "expires=" + o.toGMTString(), l.cookie = r + "=" + escape(JSON.stringify(t)) + "; path=/; " + o), x && function() {
        var t,
          n = {
            ml: h,
            unml: u,
            ops: v,
            chash: j
          };
        for (t in e)
          t in n && (null === e[t] || void 0 === e[t]) && (e[t] = n[t].call(this))
      }(), e.candidate_stats = s, n.__wurfljs_props = e, n.WURFL
    }, !("WURFL" in n))
      return n.WURFL = E, n.WURFL
  };
!function() {
  var e,
    t;
  "object" != typeof window || "__wurfljs_NORUN" in window || (t = "wurfl_debug" in (e = window) && window.wurfl_debug || "__wurfljs_DEBUG" in window && window.__wurfljs_DEBUG, "__wurfljs_MOCK" in window && (e = window.__wurfljs_MOCK), new WurflJsResolver(e, wurfl_candidates, wurfl_time_limit, t).main(), document.dispatchEvent(new Event("WurflJSDetectionComplete", {
    bubbles: !0
  })))
}()

