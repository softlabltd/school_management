
@extends('layout.layout')


@section('container')



<div class="col-md-9">
    <table cellpadding="5" cellspacing="0">
      <tr>
        <td colspan="2" style="font-size: 12pt; padding-left: 5px;">
          ছবির গ্যালারী
        </td>
      </tr>
      <tr>
        <td colspan="2" style="padding-left: 5px;">
          <style>
            @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

            /* the important bits */
            body {
              font-family: tahoma;
            }

            #img_g {
              perspective: 400px;
            }

            .info {
              transform: rotate3d(1, 0, 0, 90deg);
              width: 100%;
              height: 100%;
              padding: 20px;
              position: absolute;
              top: 0;
              left: 0;
              border-radius: 4px;
              pointer-events: none;
              background-color: hotpink;
            }

            .in-top .info {
              transform-origin: 50% 0%;
              animation: in-top 300ms ease 0ms 1 forwards;
            }

            .in-right .info {
              transform-origin: 100% 0%;
              animation: in-right 300ms ease 0ms 1 forwards;
            }

            .in-bottom .info {
              transform-origin: 50% 100%;
              animation: in-bottom 300ms ease 0ms 1 forwards;
            }

            .in-left .info {
              transform-origin: 0% 0%;
              animation: in-left 300ms ease 0ms 1 forwards;
            }

            .out-top .info {
              transform-origin: 50% 0%;
              animation: out-top 300ms ease 0ms 1 forwards;
            }

            .out-right .info {
              transform-origin: 100% 50%;
              animation: out-right 300ms ease 0ms 1 forwards;
            }

            .out-bottom .info {
              transform-origin: 50% 100%;
              animation: out-bottom 300ms ease 0ms 1 forwards;
            }

            .out-left .info {
              transform-origin: 0% 0%;
              animation: out-left 300ms ease 0ms 1 forwards;
            }

            @keyframes in-top {
              from {
                transform: rotate3d(-1, 0, 0, 90deg);
              }

              to {
                transform: rotate3d(0, 0, 0, 0deg);
              }
            }

            @keyframes in-right {
              from {
                transform: rotate3d(0, -1, 0, 90deg);
              }

              to {
                transform: rotate3d(0, 0, 0, 0deg);
              }
            }

            @keyframes in-bottom {
              from {
                transform: rotate3d(1, 0, 0, 90deg);
              }

              to {
                transform: rotate3d(0, 0, 0, 0deg);
              }
            }

            @keyframes in-left {
              from {
                transform: rotate3d(0, 1, 0, 90deg);
              }

              to {
                transform: rotate3d(0, 0, 0, 0deg);
              }
            }

            @keyframes out-top {
              from {
                transform: rotate3d(0, 0, 0, 0deg);
              }

              to {
                transform: rotate3d(-1, 0, 0, 104deg);
              }
            }

            @keyframes out-right {
              from {
                transform: rotate3d(0, 0, 0, 0deg);
              }

              to {
                transform: rotate3d(0, -1, 0, 104deg);
              }
            }

            @keyframes out-bottom {
              from {
                transform: rotate3d(0, 0, 0, 0deg);
              }

              to {
                transform: rotate3d(1, 0, 0, 104deg);
              }
            }

            @keyframes out-left {
              from {
                transform: rotate3d(0, 0, 0, 0deg);
              }

              to {
                transform: rotate3d(0, 1, 0, 104deg);
              }
            }

            /* you can ignore this ones */
            #img_ul {
              padding: 0;
              margin: 0 0 50px;
            }

            #img_ul:after {
              content: "";
              display: table;
              clear: both;
            }

            #img_g {
              position: relative;
              float: left;
              width: 148px;
              height: 148px;
              margin: 2px;
              padding: 0;
              list-style: none;
            }

            #img_g a {
              display: inline-block;
              vertical-align: top;
              text-decoration: none;
              border-radius: 4px;
            }

            #img_g #gallary_title {
              margin: 0;
              font-size: 16px;
              color: rgba(255, 255, 255, 0.9);
            }

            #img_g p {
              font-size: 12px;
              line-height: 1.5;
              color: rgba(255, 255, 255, 0.8);
            }

            #img_g .normal {
              width: 100%;
              height: 100%;
              background-color: #ECF0F1;
              color: rgba(52, 73, 94, 0.6);
              box-shadow: inset 0 2px 20px #e6ebed;
              text-align: center;
              font-size: 50px;
              line-height: 200px;
            }

            #img_g .normal svg {
              pointer-events: none;
              width: 50px;
            }

            #img_g .normal svg path {
              fill: rgba(52, 73, 94, 0.2);
            }

            * {
              box-sizing: border-box;
            }

            body {
              background-color: #fff;
            }

            h1 {
              margin: 0 auto 5px;
              text-align: center;
            }

            #gallary_title {
              font-family: 'Bree Serif', serif;
            }

            #gallary_img {
              width: 100%;
              height: 100% !important;
            }

            a.Know_More {
              background: black;
              font-size: 20px;
              font-weight: 700;
              color: white;
              padding: 10px 10px;
              transition: all .3s;
              width: 100%;
              left: 0;
              float: left;
              width: 243px;
            }

            header.fixed {
              background: #fff;
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              opacity: 1;
              visibility: visible !important;
              transition: all 1s ease !important;
              transform: translate(0, -2000px) !important;
              visibility: hidden;
              box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.2);
              transform: translate(0, 0) !important;
              transition: all 1s ease !important;
            }

            body {
              padding: 0 20px;
              margin: 0;
              font-family: sans-serif;
            }

            .page_link {
              display: inline-block;
              color: #222;
              border: 1px solid #ddd;
              padding: 5px 10px;
              margin: 0 5px;
              text-decoration: none;
              cursor: pointer;
            }

            .active_page {
              background-color: dodgerblue;
              color: #FFF;
              outline: none;
              border: 1px solid rgba(0, 0, 0, .1);
            }

            .posts {
              margin: 0;
              list-style: none;
              padding: 0;
            }

            .posts li {
              padding: 10px 5px;
              margin: 0;
              float: left;
              border-bottom: 1px solid #ddd;
              overflow: hidden;
            }

            h2 {
              margin: 0;
              padding: 0;
            }

            p {
              margin: 0;
              padding: 10px 10px 0 10px;
              color: #444;
            }
          </style>

          <body>
            `
            <div class="container">
              <ul id="img_ul" class="direction-aware">
                <ul class="posts">
                  <!-- SHOW DATA -->
                </ul>
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script>
                  $(function() {
                    // function for getting posts from posts.php
                    function getPosts(pageNum) {
                      var pageNum = pageNum;
                      $.ajax({
                        type: 'POST',
                        url: 'gallary.php',
                        data: {
                          page: pageNum
                        },
                        success: function(data) {
                          $('.posts').html(data);
                        },
                        error: function(error) {
                          console.log(error);
                        }
                      });
                    }
                    // call the getPosts function
                    // here 1 is default page number
                    getPosts(1);
                    // when click pagination button
                    $('.posts').on('click', '.page_link', function(e) {
                      e.preventDefault();
                      var page_num = $(this).attr('href');
                      getPosts(page_num);
                    });
                  });
                </script>
              </ul>
            </div>
        </td>
      </tr>
    </table>
  </div>

@endsection
