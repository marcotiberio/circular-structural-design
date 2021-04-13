import $ from 'jquery'

class AccordionProject extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.$button = $('.panel-trigger')
    this.bindFunctions()
    this.bindEvents()
  }

  bindFunctions () {
    this.togglePanel = this.togglePanel.bind(this)
  }

  bindEvents () {
    this.$.on('click', '[aria-controls]', this.togglePanel)
  }

  resolveElements () {
    this.$button = $('.panel-trigger', this)
    this.$content = $('.panel-content', this)
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

window.customElements.define('flynt-accordion-project', AccordionProject, { extends: 'div' })
