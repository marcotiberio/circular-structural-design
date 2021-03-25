import $ from 'jquery'

class GridImageText extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.bindEvents()
    this.resolveElements()
  }

  bindEvents () {
    this.$.on('click', this.triggerSummary)
  }

  resolveElements () {
    this.$showSummary = $('.slide-toggle', this)
    this.$summary = $('.content-inner', this)
  }

  connectedCallback () {}

  triggerSummary (e) {
    this.$.toggleClass('flyntComponent-menuIsOpen')
  }
}

window.customElements.define('flynt-grid-image-text', GridImageText)
