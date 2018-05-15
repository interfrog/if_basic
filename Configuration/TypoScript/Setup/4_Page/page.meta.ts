page.meta {
  robots = noindex, nofollow
  language = de
  date.override {
    field = tstamp
    date = Y-m-d
  }
  description =
  description {
    override {
      field = description
    }
  }
  keywords =
  keywords {
    override {
      field = keywords
    }
  }
  abstract =
  abstract {
    override {
      field = abstract
    }
  }
}

[globalString = IENV:HTTP_HOST = {$config.liveURL}]
page.meta {
  robots.cObject = CASE
  robots.cObject {
    key.data = page:robots
    default = TEXT
    default.value = index, follow, noarchive, noodp
    1 = TEXT
    1.value = noindex, nofollow
  }
}
[global]