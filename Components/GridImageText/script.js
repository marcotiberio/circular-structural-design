import $ from 'jquery'

class GridImageText extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindEvents()
  }

  resolveElements () {
    this.$button = $('.panel-trigger', this)
    this.$content = $('.content-inner', this)
  }

  bindFunctions () {
    this.togglePanel = this.togglePanel.bind(this)
  }

  bindEvents () {
    this.$.on('click', '[aria-controls]', this.togglePanel)
  }

  togglePanel (e) {
    const $panel = $(e.currentTarget)

    if ($panel.attr('aria-expanded') === 'true') {
      $panel.attr('aria-expanded', 'false')
      $panel.next().slideToggle('fast')
    } else {
      $panel.attr('aria-expanded', 'true')
      $panel.next().slideToggle('fast')
    }
  }
}

window.customElements.define('flynt-grid-image-text', GridImageText)
