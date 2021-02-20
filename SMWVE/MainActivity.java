package com.StringManolo.StringManoloJs;

import android.app.Activity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebSettings;
import android.webkit.WebResourceError;
import android.webkit.WebResourceRequest;
import android.webkit.WebViewClient;
import android.widget.Toast;
import android.annotation.TargetApi;


import com.StringManolo.StringManoloJs.R;

public class MainActivity extends Activity {

  private WebView mWebview;
  
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
       
 setContentView(R.layout.activity_main);
 
 
mWebview  = new WebView(this);

       WebSettings webSettings = mWebview.getSettings();
webSettings.setJavaScriptEnabled(true); 

        final Activity activity = this;

        mWebview.setWebViewClient(new WebViewClient() {
            @SuppressWarnings("deprecation")
            @Override
            public void onReceivedError(WebView view, int errorCode, String description, String failingUrl) {
                Toast.makeText(activity, description, Toast.LENGTH_SHORT).show();
            }
            @TargetApi(android.os.Build.VERSION_CODES.M)
            @Override
            public void onReceivedError(WebView view, WebResourceRequest req, WebResourceError rerr) {
                
                onReceivedError(view, rerr.getErrorCode(), rerr.getDescription().toString(), req.getUrl().toString());
            }
        });

        mWebview.loadUrl("http://stringmanolo.byethost12.com/SMGSC.php");
        setContentView(mWebview );


    }

}
