/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

(function($, window) {

    var __ = wp.i18n.__; //translation functions
    var createElement = wp.element.createElement;

    // transform: translate(calc(50% - 5px), 0)
    const iconEl = createElement('svg', { width: 20, height: 20 },
        createElement('path', { d: "M19.971,4.037 C19.939,4.132 19.856,4.235 19.723,4.368 C19.434,4.660 19.144,4.951 18.853,5.241 C18.562,5.532 18.271,5.822 17.979,6.111 C17.974,6.116 17.969,6.120 17.964,6.125 C17.950,6.139 17.936,6.153 17.923,6.165 C17.915,6.172 17.908,6.178 17.901,6.184 C17.891,6.193 17.880,6.203 17.869,6.212 C17.862,6.218 17.855,6.223 17.848,6.229 C17.838,6.237 17.828,6.245 17.819,6.252 C17.811,6.257 17.804,6.261 17.797,6.266 C17.788,6.272 17.779,6.279 17.770,6.284 C17.763,6.288 17.756,6.292 17.749,6.296 C17.740,6.300 17.732,6.305 17.724,6.309 C17.717,6.313 17.710,6.315 17.703,6.317 C17.695,6.321 17.686,6.325 17.678,6.327 C17.671,6.329 17.665,6.330 17.658,6.332 C17.650,6.334 17.642,6.336 17.634,6.338 C17.627,6.339 17.620,6.339 17.613,6.339 C17.606,6.340 17.598,6.341 17.591,6.341 C17.590,6.341 17.590,6.341 17.590,6.341 C17.582,6.341 17.574,6.340 17.566,6.339 C17.559,6.339 17.552,6.339 17.545,6.337 C17.538,6.336 17.530,6.334 17.522,6.332 C17.515,6.330 17.508,6.329 17.501,6.326 C17.492,6.324 17.484,6.320 17.476,6.317 C17.469,6.314 17.462,6.311 17.455,6.308 C17.446,6.304 17.437,6.299 17.429,6.294 C17.422,6.290 17.415,6.287 17.407,6.283 C17.398,6.277 17.388,6.270 17.379,6.264 C17.372,6.259 17.365,6.255 17.358,6.250 C17.348,6.242 17.337,6.234 17.327,6.226 C17.320,6.220 17.313,6.216 17.306,6.210 C17.294,6.200 17.281,6.188 17.268,6.177 C17.263,6.172 17.257,6.168 17.251,6.163 C17.233,6.146 17.213,6.128 17.193,6.108 C17.064,5.983 16.930,5.863 16.798,5.741 C16.764,5.750 16.729,5.760 16.695,5.769 C16.692,5.788 16.689,5.807 16.686,5.825 C16.670,5.920 16.650,6.014 16.639,6.108 C16.635,6.146 16.632,6.183 16.632,6.221 C16.628,8.175 16.630,11.402 16.629,13.357 C16.629,13.524 16.619,13.649 16.587,13.743 C16.563,13.817 16.525,13.872 16.469,13.911 C16.441,13.930 16.408,13.946 16.371,13.958 C16.333,13.971 16.290,13.980 16.242,13.986 C16.169,13.996 16.083,14.000 15.983,14.000 C15.139,14.000 14.294,14.000 13.450,14.000 C13.312,14.000 13.175,14.000 13.037,14.000 C13.127,13.752 13.128,13.503 13.128,13.357 C13.128,12.870 13.128,12.384 13.128,11.897 C13.128,10.718 13.128,8.234 13.129,7.030 C13.205,7.049 13.285,7.059 13.370,7.059 C13.771,7.059 14.059,6.825 14.265,6.620 C14.823,6.067 15.411,5.479 16.013,4.874 C16.167,4.719 16.488,4.396 16.486,3.939 C16.484,3.539 16.254,3.254 16.007,3.006 C15.279,2.277 14.538,1.538 13.822,0.823 C13.736,0.737 13.651,0.652 13.565,0.566 C13.642,0.540 13.718,0.511 13.793,0.478 C13.906,0.429 14.017,0.373 14.125,0.309 C14.152,0.294 14.179,0.277 14.206,0.260 C14.285,0.210 14.364,0.156 14.440,0.097 C14.460,0.082 14.483,0.069 14.508,0.059 C14.583,0.028 14.675,0.017 14.756,0.015 C14.830,0.012 14.904,0.011 14.979,0.010 C15.006,0.010 15.032,0.010 15.059,0.010 C15.116,0.009 15.173,0.009 15.230,0.009 C15.277,0.009 15.325,0.010 15.373,0.010 C15.390,0.010 15.407,0.009 15.425,0.009 C15.448,0.009 15.471,0.009 15.494,0.009 C15.568,0.008 15.641,0.008 15.715,0.005 C15.732,0.005 15.749,0.005 15.766,0.005 C15.775,0.005 15.785,0.005 15.795,0.006 C15.806,0.006 15.816,0.007 15.827,0.007 C15.837,0.008 15.846,0.009 15.855,0.010 C15.866,0.011 15.876,0.012 15.887,0.013 C15.896,0.014 15.905,0.015 15.915,0.017 C15.925,0.018 15.935,0.020 15.945,0.022 C15.954,0.023 15.963,0.025 15.972,0.027 C15.982,0.029 15.992,0.031 16.003,0.034 C16.011,0.036 16.020,0.038 16.029,0.040 C16.039,0.043 16.048,0.045 16.058,0.048 C16.067,0.051 16.075,0.053 16.084,0.056 C16.093,0.059 16.103,0.063 16.113,0.066 C16.121,0.069 16.129,0.072 16.137,0.075 C16.147,0.079 16.157,0.083 16.166,0.087 C16.174,0.090 16.182,0.094 16.190,0.097 C16.199,0.101 16.209,0.106 16.218,0.110 C16.226,0.114 16.233,0.118 16.241,0.122 C16.250,0.127 16.260,0.132 16.269,0.137 C16.276,0.141 16.284,0.145 16.291,0.149 C16.300,0.155 16.310,0.160 16.319,0.166 C16.326,0.170 16.333,0.175 16.340,0.179 C16.349,0.185 16.358,0.191 16.367,0.198 C16.374,0.202 16.381,0.207 16.388,0.212 C16.397,0.218 16.406,0.225 16.416,0.232 C16.422,0.237 16.428,0.242 16.435,0.247 C16.444,0.254 16.454,0.262 16.463,0.270 C16.469,0.275 16.475,0.280 16.481,0.284 C16.491,0.293 16.501,0.303 16.512,0.312 C16.516,0.316 16.521,0.320 16.526,0.324 C16.540,0.338 16.555,0.352 16.569,0.367 C16.694,0.492 16.819,0.616 16.944,0.741 C16.417,0.214 18.377,2.169 19.718,3.513 C19.807,3.603 19.875,3.679 19.920,3.748 C19.953,3.800 19.975,3.848 19.983,3.896 C19.986,3.911 19.988,3.927 19.988,3.942 C19.988,3.974 19.982,4.005 19.971,4.037 ZM15.044,3.748 C15.078,3.800 15.099,3.848 15.108,3.896 C15.111,3.911 15.112,3.927 15.112,3.942 C15.112,3.974 15.107,4.005 15.096,4.037 C15.063,4.132 14.980,4.235 14.848,4.368 C14.558,4.660 14.268,4.951 13.977,5.241 C13.687,5.532 13.396,5.822 13.104,6.111 C13.099,6.116 13.094,6.120 13.089,6.125 C13.075,6.139 13.061,6.153 13.047,6.165 C13.040,6.172 13.033,6.178 13.026,6.184 C13.015,6.193 13.004,6.203 12.994,6.212 C12.986,6.218 12.979,6.223 12.972,6.229 C12.962,6.237 12.953,6.245 12.943,6.252 C12.936,6.257 12.929,6.261 12.921,6.266 C12.913,6.272 12.903,6.279 12.895,6.284 C12.888,6.288 12.881,6.292 12.874,6.296 C12.865,6.300 12.856,6.305 12.848,6.309 C12.841,6.313 12.834,6.315 12.828,6.317 C12.819,6.321 12.811,6.325 12.803,6.327 C12.796,6.329 12.789,6.330 12.782,6.332 C12.774,6.334 12.766,6.336 12.758,6.338 C12.752,6.339 12.745,6.339 12.738,6.339 C12.731,6.340 12.723,6.341 12.715,6.341 C12.715,6.341 12.715,6.341 12.714,6.341 C12.707,6.341 12.699,6.340 12.691,6.339 C12.684,6.339 12.677,6.339 12.670,6.337 C12.662,6.336 12.654,6.334 12.646,6.332 C12.639,6.330 12.632,6.329 12.625,6.326 C12.617,6.324 12.609,6.320 12.601,6.317 C12.593,6.314 12.586,6.311 12.579,6.308 C12.571,6.304 12.562,6.299 12.553,6.294 C12.546,6.290 12.539,6.287 12.532,6.283 C12.523,6.277 12.513,6.270 12.504,6.264 C12.497,6.259 12.490,6.255 12.483,6.250 C12.472,6.242 12.462,6.234 12.451,6.226 C12.444,6.220 12.438,6.216 12.431,6.210 C12.419,6.200 12.406,6.188 12.393,6.177 C12.387,6.172 12.382,6.168 12.376,6.163 C12.357,6.146 12.338,6.128 12.318,6.108 C12.189,5.983 12.055,5.863 11.923,5.741 C11.888,5.750 11.854,5.760 11.819,5.769 C11.817,5.788 11.814,5.807 11.810,5.825 C11.795,5.920 11.774,6.014 11.764,6.108 C11.760,6.146 11.757,6.183 11.757,6.221 C11.753,8.175 11.754,11.402 11.754,13.357 C11.754,13.524 11.743,13.649 11.712,13.743 C11.687,13.817 11.649,13.872 11.593,13.911 C11.565,13.930 11.533,13.946 11.495,13.958 C11.458,13.971 11.415,13.980 11.366,13.986 C11.294,13.996 11.208,14.000 11.107,14.000 C10.263,14.000 9.418,14.000 8.574,14.000 C8.024,14.000 7.475,14.000 6.925,14.000 C5.945,14.000 4.965,14.000 3.984,14.000 C3.951,14.000 3.920,13.999 3.889,13.998 C3.829,13.996 3.775,13.992 3.726,13.984 C3.701,13.980 3.678,13.976 3.657,13.971 C3.613,13.961 3.575,13.947 3.541,13.930 C3.524,13.922 3.509,13.912 3.494,13.902 C3.450,13.870 3.417,13.830 3.391,13.780 C3.374,13.746 3.361,13.708 3.350,13.664 C3.340,13.621 3.333,13.572 3.328,13.517 C3.324,13.463 3.322,13.402 3.322,13.336 C3.321,11.365 3.323,8.122 3.318,6.152 C3.318,6.051 3.282,5.950 3.254,5.849 C3.249,5.831 3.244,5.812 3.240,5.794 C3.217,5.807 3.193,5.819 3.168,5.831 C3.134,5.848 3.099,5.864 3.066,5.880 C3.037,5.895 3.008,5.910 2.982,5.927 C2.955,5.944 2.930,5.963 2.908,5.984 C2.830,6.059 2.763,6.122 2.703,6.173 C2.701,6.175 2.699,6.177 2.697,6.178 C2.687,6.187 2.678,6.195 2.668,6.203 C2.665,6.205 2.663,6.207 2.660,6.209 C2.651,6.216 2.643,6.223 2.635,6.229 C2.632,6.231 2.629,6.233 2.626,6.236 C2.618,6.242 2.610,6.248 2.603,6.253 C2.599,6.255 2.596,6.258 2.593,6.260 C2.586,6.265 2.579,6.270 2.572,6.274 C2.569,6.276 2.566,6.278 2.563,6.280 C2.556,6.284 2.549,6.288 2.542,6.292 C2.539,6.294 2.535,6.296 2.532,6.298 C2.526,6.301 2.519,6.305 2.513,6.308 C2.510,6.310 2.506,6.311 2.502,6.313 C2.497,6.315 2.491,6.318 2.485,6.320 C2.481,6.322 2.478,6.323 2.474,6.325 C2.468,6.327 2.463,6.329 2.458,6.330 C2.454,6.332 2.450,6.332 2.446,6.334 C2.441,6.335 2.436,6.336 2.431,6.337 C2.427,6.338 2.423,6.339 2.419,6.339 C2.414,6.340 2.409,6.341 2.405,6.342 C2.400,6.342 2.396,6.342 2.392,6.342 C2.387,6.343 2.383,6.343 2.378,6.343 C2.374,6.343 2.369,6.343 2.365,6.343 C2.361,6.342 2.356,6.342 2.352,6.342 C2.348,6.341 2.343,6.340 2.339,6.340 C2.334,6.339 2.330,6.339 2.326,6.338 C2.321,6.337 2.316,6.335 2.311,6.334 C2.307,6.333 2.303,6.332 2.299,6.331 C2.294,6.329 2.289,6.327 2.284,6.325 C2.280,6.324 2.276,6.323 2.272,6.321 C2.267,6.319 2.262,6.316 2.256,6.314 C2.252,6.312 2.249,6.311 2.245,6.309 C2.239,6.306 2.233,6.302 2.227,6.299 C2.224,6.297 2.220,6.295 2.217,6.293 C2.210,6.290 2.204,6.285 2.197,6.281 C2.194,6.279 2.191,6.277 2.187,6.275 C2.181,6.271 2.174,6.266 2.167,6.261 C2.164,6.259 2.161,6.257 2.157,6.254 C2.151,6.249 2.144,6.244 2.137,6.239 C2.133,6.236 2.130,6.233 2.126,6.230 C2.119,6.225 2.113,6.220 2.106,6.214 C2.102,6.211 2.098,6.208 2.093,6.204 C2.086,6.198 2.078,6.191 2.071,6.184 C2.067,6.181 2.063,6.178 2.059,6.174 C2.051,6.168 2.044,6.161 2.036,6.154 C2.032,6.150 2.027,6.146 2.023,6.142 C2.016,6.135 2.008,6.128 2.001,6.121 C1.996,6.116 1.991,6.112 1.986,6.107 C1.978,6.100 1.971,6.093 1.963,6.086 C1.958,6.080 1.952,6.075 1.946,6.069 C1.943,6.066 1.940,6.063 1.937,6.060 C1.913,6.037 1.888,6.012 1.861,5.985 C1.438,5.562 1.016,5.139 0.595,4.715 C0.454,4.572 0.312,4.430 0.171,4.288 C0.143,4.259 0.118,4.231 0.097,4.202 C0.054,4.145 0.026,4.088 0.011,4.030 C0.004,4.002 0.000,3.973 0.000,3.944 C0.000,3.930 0.001,3.915 0.002,3.901 C0.014,3.800 0.069,3.700 0.169,3.600 C0.714,3.052 1.260,2.505 1.807,1.959 C2.353,1.413 2.901,0.867 3.449,0.322 C3.474,0.296 3.500,0.273 3.527,0.250 C3.536,0.242 3.547,0.235 3.556,0.228 C3.574,0.214 3.592,0.200 3.610,0.187 C3.622,0.179 3.634,0.172 3.646,0.165 C3.663,0.154 3.680,0.143 3.697,0.133 C3.710,0.126 3.724,0.120 3.737,0.113 C3.754,0.105 3.771,0.096 3.788,0.088 C3.802,0.082 3.817,0.078 3.832,0.072 C3.849,0.066 3.866,0.059 3.884,0.053 C3.899,0.049 3.914,0.045 3.930,0.041 C3.948,0.037 3.965,0.032 3.984,0.028 C3.999,0.025 4.016,0.023 4.032,0.021 C4.050,0.018 4.069,0.014 4.088,0.013 C4.104,0.011 4.121,0.011 4.138,0.010 C4.151,0.010 4.164,0.009 4.177,0.008 C4.185,0.008 4.193,0.008 4.201,0.008 C4.251,0.008 4.301,0.009 4.351,0.010 C4.381,0.010 4.411,0.011 4.442,0.011 C4.448,0.011 4.454,0.011 4.460,0.011 C4.477,0.011 4.494,0.010 4.511,0.010 C4.524,0.010 4.536,0.010 4.549,0.010 C4.585,0.009 4.621,0.007 4.657,0.005 C4.657,0.005 4.657,0.005 4.657,0.005 C4.657,0.005 4.657,0.005 4.657,0.005 C4.704,0.002 4.751,0.001 4.797,0.000 C4.804,0.000 4.812,0.000 4.819,0.000 C4.829,0.000 4.840,0.000 4.850,0.001 C4.866,0.001 4.882,0.001 4.899,0.002 C4.909,0.002 4.920,0.003 4.931,0.004 C4.946,0.005 4.962,0.006 4.977,0.007 C4.988,0.008 4.998,0.009 5.009,0.010 C5.025,0.011 5.040,0.013 5.055,0.015 C5.066,0.016 5.076,0.018 5.086,0.019 C5.102,0.021 5.118,0.024 5.133,0.026 C5.143,0.028 5.153,0.029 5.162,0.031 C5.179,0.034 5.197,0.038 5.214,0.041 C5.221,0.043 5.229,0.045 5.237,0.046 C5.287,0.058 5.337,0.071 5.386,0.086 C5.394,0.089 5.401,0.091 5.409,0.094 C5.426,0.099 5.443,0.105 5.460,0.111 C5.469,0.114 5.478,0.118 5.487,0.121 C5.503,0.127 5.518,0.133 5.533,0.139 C5.543,0.143 5.553,0.147 5.562,0.151 C5.577,0.157 5.592,0.163 5.606,0.170 C5.616,0.174 5.626,0.179 5.636,0.183 C5.651,0.190 5.666,0.197 5.680,0.204 C5.690,0.209 5.700,0.214 5.710,0.219 C5.725,0.227 5.740,0.235 5.755,0.243 C5.764,0.248 5.774,0.253 5.783,0.258 C5.799,0.267 5.816,0.276 5.832,0.286 C5.840,0.290 5.848,0.295 5.856,0.300 C5.881,0.314 5.905,0.329 5.930,0.345 C5.968,0.368 6.006,0.391 6.045,0.413 C6.055,0.418 6.065,0.424 6.075,0.430 C6.109,0.448 6.143,0.466 6.178,0.483 C6.183,0.485 6.188,0.488 6.193,0.491 C6.232,0.509 6.272,0.527 6.311,0.543 C6.321,0.548 6.332,0.552 6.342,0.556 C6.375,0.569 6.408,0.582 6.441,0.594 C6.450,0.597 6.458,0.600 6.466,0.603 C6.506,0.617 6.546,0.630 6.587,0.642 C6.597,0.644 6.606,0.647 6.616,0.650 C6.649,0.659 6.683,0.668 6.717,0.676 C6.727,0.679 6.737,0.681 6.747,0.684 C6.788,0.693 6.829,0.702 6.871,0.709 C6.879,0.711 6.887,0.712 6.895,0.714 C6.930,0.720 6.965,0.725 7.001,0.730 C7.012,0.732 7.023,0.733 7.034,0.735 C7.076,0.740 7.118,0.745 7.161,0.749 C7.166,0.749 7.171,0.749 7.176,0.750 C7.214,0.753 7.253,0.755 7.291,0.757 C7.303,0.758 7.314,0.758 7.326,0.759 C7.368,0.760 7.409,0.761 7.451,0.761 C7.453,0.761 7.454,0.761 7.456,0.761 C7.457,0.761 7.457,0.761 7.457,0.761 C7.460,0.761 7.462,0.761 7.465,0.761 C7.518,0.761 7.571,0.760 7.625,0.757 C7.643,0.756 7.661,0.755 7.679,0.754 C7.718,0.752 7.757,0.749 7.796,0.746 C7.816,0.744 7.836,0.742 7.856,0.740 C7.895,0.736 7.935,0.731 7.975,0.726 C7.992,0.724 8.010,0.722 8.027,0.719 C8.084,0.711 8.141,0.703 8.198,0.693 C8.450,0.648 8.689,0.577 8.917,0.478 C9.031,0.429 9.142,0.373 9.250,0.309 C9.277,0.294 9.304,0.277 9.330,0.260 C9.410,0.210 9.488,0.156 9.565,0.097 C9.585,0.082 9.608,0.069 9.633,0.059 C9.708,0.028 9.800,0.017 9.880,0.015 C9.955,0.012 10.029,0.011 10.103,0.010 C10.130,0.010 10.157,0.010 10.184,0.010 C10.241,0.009 10.298,0.009 10.354,0.009 C10.402,0.009 10.450,0.010 10.497,0.010 C10.515,0.010 10.532,0.009 10.549,0.009 C10.572,0.009 10.596,0.009 10.619,0.009 C10.692,0.008 10.766,0.008 10.839,0.005 C10.857,0.005 10.873,0.005 10.890,0.005 C10.900,0.005 10.910,0.005 10.919,0.006 C10.930,0.006 10.941,0.007 10.952,0.007 C10.961,0.008 10.971,0.009 10.980,0.010 C10.991,0.011 11.001,0.012 11.011,0.013 C11.021,0.014 11.030,0.015 11.039,0.017 C11.050,0.018 11.060,0.020 11.070,0.022 C11.079,0.023 11.088,0.025 11.097,0.027 C11.107,0.029 11.117,0.031 11.127,0.034 C11.136,0.036 11.145,0.038 11.153,0.040 C11.163,0.043 11.173,0.045 11.183,0.048 C11.191,0.051 11.200,0.053 11.208,0.056 C11.218,0.059 11.228,0.063 11.237,0.066 C11.246,0.069 11.254,0.072 11.262,0.075 C11.272,0.079 11.281,0.083 11.291,0.087 C11.299,0.090 11.307,0.094 11.314,0.097 C11.324,0.101 11.333,0.106 11.343,0.110 C11.350,0.114 11.358,0.118 11.366,0.122 C11.375,0.127 11.384,0.132 11.394,0.137 C11.401,0.141 11.408,0.145 11.416,0.149 C11.425,0.155 11.434,0.160 11.443,0.166 C11.450,0.170 11.458,0.175 11.465,0.179 C11.474,0.185 11.483,0.191 11.492,0.198 C11.499,0.202 11.506,0.207 11.513,0.212 C11.522,0.218 11.531,0.225 11.540,0.232 C11.547,0.237 11.553,0.242 11.559,0.247 C11.569,0.254 11.578,0.262 11.588,0.270 C11.594,0.275 11.599,0.280 11.605,0.284 C11.616,0.293 11.626,0.303 11.636,0.312 C11.641,0.316 11.646,0.320 11.650,0.324 C11.665,0.338 11.680,0.352 11.694,0.367 C11.819,0.492 11.944,0.616 12.069,0.741 C12.206,0.878 12.344,1.015 12.481,1.153 C13.269,1.939 14.056,2.725 14.842,3.513 C14.932,3.603 14.999,3.679 15.044,3.748 Z" })
    );

    function createId(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    function ItemListComponent() {
        // wp.element.Component.apply(null, arguments);

        // this.onChangeContent = this.onChangeContent.bind(this);
        this.id = createId(10);
        // this.input = wp.element.createRef();

        this.state = { hello: 'world' };
    }

    // extend the Component class
    ItemListComponent.prototype = Object.create(wp.element.Component.prototype);

    // add some custom methods
    ItemListComponent.prototype.getCurrencyConversionOpts = function() {
        var currencyConversion = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR",
            "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
        return currencyConversion.map(value => ({ value, label: value }));
    };
    ItemListComponent.prototype.setItemIdsAttribute = function(itemids) {
        this.props.setAttributes({itemids: itemids});
    };
    ItemListComponent.prototype.setCurrencyAttribute = function(currency_conversion) {
        this.props.setAttributes({currency_conversion: currency_conversion});
    };
    ItemListComponent.prototype.loadQueryResults = function (query, callback) {
        if (!query.length) return callback();
        $.ajax({
            url: "admin-ajax.php?action=ucwp_get_item_list_data",
            type: "GET",
            cache: false,
            data: {
                's': query,
                'm': '50'
            },
            dataType: 'json',
            error: function () {
                callback();
            },
            success: function (res) {
                callback(res);
            }
        });

    };

    ItemListComponent.prototype.componentDidMount = function() {
        var rm = this;
        // get input node from react ref
        // var $input = $(wp.element.findDOMNode(rm.refs.input)).find('input');
        var $input = $('#' + rm.id);
        if (!$input.hasClass('selectized')) {
            // save the input value
            var inputVal = $input.val();
            // clear it before initializing selectize (it'll cause issues with the description & thumbnail props)
            $input.val('');
            $input.selectize({
                plugins: ['remove_button', 'drag_drop'],
                delimiter: ',',
                // persist: false,
                // hideSelected: false,
                // dropdownParent: "body",
                // preload: "focus",
                // maxItems: 1,
                maxOptions: 50,
                valueField: 'itemId',
                labelField: 'itemId',
                searchField: 'itemId',
                // create: false,
                // closeAfterSelect: true,
                render: {
                    option: function (item, escape) {
                        console.log('item', item);
                        var html = '<div class="uc-selectize-option"><div class="image-wrapper">';
                        if (item.thumbnail) {
                            html += '<img src="' + item.thumbnail + '" alt="' + escape(item.description) + '" style="float:left;">';
                        }
                        html += '</div><div class="id-description-wrapper"><div class="description"><span>' + escape(item.description) + '</span></div><small class="itemId">' + escape(item.itemId) + '</small></div></div>';
                        return html;
                    }
                },
                score: function (search) {
                    var score = this.getScoreFunction(search);
                    return function (item) {
                        return score(item); // * (1 + Math.min(item.watchers / 100, 1));
                    };
                },
                load: rm.loadQueryResults,
                onInitialize: function () {
                    rm.loadQueryResults(inputVal, function (res) {
                        if (!res) return false;
                        var inputIds = inputVal.split(',');
                        var opts = [];
                        // collect array of all previously set options
                        for (let i = 0; i < res.length; i++) {
                            if (inputIds.indexOf(res[i].itemId) >= 0) {
                                opts.push(res[i]);
                            }
                        }
                        // set each previous
                        for (let i = 0; i < opts.length; i++) {
                            $input[0].selectize.options[opts[i].itemId] = opts[i];
                        }
                        $input[0].selectize.setValue(inputIds);

                    });
                },
                onChange: function(value) {
                    rm.setItemIdsAttribute.call(rm, value);
                },
            });
        }
    };
    ItemListComponent.prototype.render = function() {
        var rm = this;
        var h3 = createElement(
            "h3",
            null,
            __("Item List")
        );
        var itemIdSelect = createElement(wp.components.TextControl, {
            value: this.props.attributes.itemids,
            label: __('Item IDs'),
            id: this.id,
            className: 'ucwp-itemid-field',
            help: 'Start typing an Item ID to search...',
            onChange: function(value) {
                rm.setItemIdsAttribute.call(rm, value);
            },
        });
        var currencySelect = createElement(wp.components.SelectControl, {
            options: this.getCurrencyConversionOpts(),
            value: this.props.attributes.currency_conversion,
            className: 'ucwp-select-field',
            label: __('Currency Conversion'),
            onChange: function(value) {
                rm.setCurrencyAttribute.call(rm, value);
            },
        });

        console.log('itemIdSelect', itemIdSelect);
        return createElement(
            "div",
            null,
            h3,
            itemIdSelect,
            currencySelect,
        );
    };


    wp.blocks.registerBlockType('ucwp/item-list', {
        title: __('Item List'),
        icon: iconEl,
        category: 'ultracart',
        attributes: {
            is_block: { type: 'boolean', default: true },
            itemids: { type: 'string', default: '' },
            currency_conversion: { type: 'string', default: 'USD' },
        },
        edit: ItemListComponent,
        save: function(props) {
            console.log(props.attributes);
            return null;
        }
    });
})(jQuery, window);
